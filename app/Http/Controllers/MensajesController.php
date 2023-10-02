<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;
class MensajesController extends Controller
{


    public function guardarmensaje(Request $request){
        
        // $request->validate([
        //     'clave' => 'required_without_all:valor',
        //     'valor' => 'required_without_all:clave',
        // ]);
    
        DB::table('mensajes')->insert([
            'nombre_apellido'   => $request->input('nombre_apellido'),
            'correo'            => $request->input('correo'),
            'telefono'          => $request->input('telefono'),
            'especialidad'      => $request->input('especialidad'),
            'turno'             => $request->input('turno'),
            'fecha_hora'        => $request->input('fecha_hora'),

        ]);
        Session::flash('mensaje_confirmacion', 'El formulario se envio con exito.');
        return redirect()->route('separar_cita1');   

    }
    
}


