<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;

class AdminUsuarios extends Controller
{
    public function consultar(){
        $users = User::all();
        return view('admin.adminusuarios')->with('users',$users);
    }
    public function editar(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.usuario-editar')->with('users', $users);
    }
    public function actualizar(Request $request, $id){
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->surname = $request->input('surname');
        $users->phone = $request->input('phone');
        $users->userType = $request->input('userType');
        $users->email = $request->input('email');


        $users->update();

         return redirect('/administrar-usuarios')->with('status', 'El usuario ha sido actualizado');
    }
    public function eliminar($id){
        $users = User::findOrFail($id);
       
        $users->delete();

         return redirect('/administrar-usuarios')->with('status', 'EL usuario a sido eliminado');
    }
}
