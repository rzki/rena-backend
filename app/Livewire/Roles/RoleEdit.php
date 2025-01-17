<?php

namespace App\Livewire\Roles;

use Livewire\Attributes\Title;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleEdit extends Component
{
    public $role, $roleId, $name;
    public function mount($roleId)
    {
        $this->role = Role::where('id', $roleId)->first();
        $this->name = $this->role->name;
    }
    public function update()
    {
        Role::where('id', $this->roleId)->update([
            'name' => $this->name
        ]);
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Role berhasil diubah!',
            'toast'=> false,
            'position'=> 'center',
            'timer'=> 1500,
            'showConfirmButton'=> false
        ]);
        return $this->redirectRoute('roles.index', navigate:true);
    }
    #[Title('Edit Role')]
    public function render()
    {
        return view('livewire.roles.role-edit');
    }
}
