<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;
class RegistrosController extends Controller
{

   public function index()
    {
        $mensajes = DB::table('mensajes')->get();

        return view('registros.index', ['mensajes' => $mensajes]);
    } 
}

