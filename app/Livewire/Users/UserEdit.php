<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserEdit extends Component
{
    use AuthorizesRequests;
    public $user, $userId, $name, $email, $password, $role;
    public function mount($userId)
    {
        if (!Auth::user()->hasRole(['Super Admin', 'IT Manager', 'IT Supervisor'])) {
            abort(403, 'Unauthorized');
        }
        $this->user = User::where('userId', $userId)->first();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }
    public function update()
    {
        User::where('userId', $this->userId)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->user->assignRole($this->role);
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'User Update Successful!',
            'toast' => false,
            'position' => 'center',
            'timer' => 1500,
            'showConfirmButton' => false,
        ]);
        // Mail::to($this->email)->send(new UserRegistrationMail($users));
        return $this->redirectRoute('users.index', navigate: true);
    }
    #[Title('Edit Pengguna')]
    public function render()
    {
        return view('livewire.users.user-edit', [
            'roles' => Role::where('id', '!=', 1)->get(),
        ]);
    }
}
