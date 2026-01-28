<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // funcion listar (index)
    public function funListar(){

        $usuarios = User::get();

        return view("usuario.listar", ["usuarios" => $usuarios]);
    }

    // cargar o mostrar un formulario de creación html (create)
    public function funCrear(){
        return view("usuario.crear");
    }

    // guardar en la Base de datos (store)
    public function funGuardar(Request $request){
        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->email = $request->correo;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect("/usuario");
    }
    // mostrar por id (show)
    public function funMostrar($id){
        $usuario = User::find($id);

        if ($usuario->hasRole('Super Admin')) {
            // El usuario es admin
            // return "Es Super admin";
        }
        // return "No es SuperAdmin";

        // return $usuario->permissions; 
        // return $permissionNames = $usuario->getPermissionNames();

        return view("usuario.mostrar", ["usuario" => $usuario]);
        // return view("usuario.mostrar", compact('usuario'));
        // return view("usuario.mostrar")->with("usuario", $usuario);
    }
    // cargar o renderizar un formulario de edicion con id (edit)
    public function funEditar($id){
        $usuario = User::find($id);
        return view("usuario.editar", compact('usuario'));
    }
    // modificar en la Base de datos (update)
    public function funModificar(Request $request, $id){
        $usuario = User::find($id);
        $usuario->email = $request->correo;
        $usuario->name = $request->nombre;
        if(isset($request->password)){
            $usuario->password = $request->password;
        }
        $usuario->update();

        return redirect("/usuario");
    }
    // eliminar de la base de datos (delete)
    public function funEliminar($id){
        $usuario = User::find($id);

        $usuario->delete();

        return redirect("/usuario");
    }
}
