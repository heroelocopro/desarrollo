<?php

namespace App\Http\Controllers;

use App\Models\administrador;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class login extends Controller
{
    public function  login(Request $request){

        $usuarios = usuario::all();
        $admin = administrador::all();

        foreach($usuarios as $usuario){

            if($request->usuario === $usuario->usuario and $request->contrasena === $usuario->contrasena){
                foreach($admin as $adm)
                if($adm->usuario_idusuario === $usuario->id){
                    return view('admin');
                }
                
                return view('usuario');
            }
            
        }
        return back();
        

    }
}
