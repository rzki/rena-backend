<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserCreate extends Component
{
    use AuthorizesRequests;
    public $name, $email, $password, $role;
    public function mount()
    {
        if(!Auth::user()->hasRole(['Super Admin', 'IT Manager', 'IT Supervisor'])){
            abort(403, 'Unauthorized');
        }
    }
    public function create()
    {
        $users = User::create([
            'userId' => Str::orderedUuid(),
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make('MedquestMJG2025!'),
        ]);
        $users->assignRole($this->role);
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'User Registration Successful!',
            'toast' => false,
            'position' => 'center',
            'timer' => 1500,
            'showConfirmButton' => false,
        ]);
        return $this->redirectRoute('users.index', navigate:true);
    }
    #[Title('Tambah Pengguna Baru')]
    public function render()
    {
        return view('livewire.users.user-create', [
            'roles' => Role::where('id', '!=', '1')->get(),
        ]);
    }
}
