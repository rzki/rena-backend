<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Livewire\Attributes\Title;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class RoleIndex extends Component
{
    public $role, $roleId;
    public $perPage = 5;
    public $listeners = ['deleteConfirmed' => 'delete'];
    public function mount()
    {
        if(!Auth::user()->hasRole(['Super Admin', 'IT Manager', 'IT Supervisor'])){
            abort(403, 'Unauthorized');
        }
    }
    public function deleteConfirm($roleId)
    {
        $this->roleId = $roleId;
        $this->dispatch('delete-confirmation');
    }
    public function delete()
    {
        $this->role = Role::where('id', $this->roleId)->first();
        $this->role->delete();
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Role berhasil dihapus!',
            'toast' => false,
            'position' => 'center',
            'timer' => 1500,
            'showConfirmButton' => false,
        ]);
        return $this->redirectRoute('roles.index', navigate: true);
    }
    #[Title('Roles')]
    public function render()
    {
        return view('livewire.roles.role-index',[
            'roles' => Role::paginate($this->perPage),
        ]);
    }
}
