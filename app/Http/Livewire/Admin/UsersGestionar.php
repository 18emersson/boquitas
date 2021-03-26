<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersGestionar extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;

    // funcion para resetear la pagina y el buscador 
    public function updatingSearch(){
        $this->resetPage();
    }

    // funcion para renderisar el componente con la tabla
    public function render()
    {   
        
        $users = User::where('name','LIKE','%'.$this->search.'%')
        ->orWhere('numero_documento','LIKE','%'.$this->search.'%')
        ->paginate(6);
        return view('livewire.admin.users-gestionar', compact('users'));
    }

    //funcion para eliminar un registro de usuario
    public function destroy(User $user){
        $user->delete();
    }
}
