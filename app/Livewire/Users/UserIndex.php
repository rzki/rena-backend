<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

class UserIndex extends Component
{
    public $perPage = 5;
    public $user, $userId;
    public $listeners = ['deleteConfirmed' => 'delete'];

    public function mount()
    {
        if(!Auth::user()->hasRole(['Super Admin', 'IT Manager', 'IT Supervisor'])){
            abort(403, 'Unauthorized');
        }
    }
    public function deleteConfirm($userId)
    {
        $this->userId = $userId;
        $this->dispatch('delete-confirmation');
    }
    public function delete()
    {
        $this->user = User::where('userId', $this->userId)->first();
        $this->user->delete();
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'User deleted successfully!',
            'toast' => false,
            'position' => 'center',
            'timer' => 1500,
            'showConfirmButton' => false,
        ]);
        return $this->redirectRoute('users.index', navigate: true);
    }
    #[Title('Pengguna')]
    public function render()
    {
        return view('livewire.users.user-index',[
            'users' => User::where('id', '!=', 1)->with('roles')->orderByDesc('id')->paginate($this->perPage),
        ]);
    }
}
