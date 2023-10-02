<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $perPage = 15;
        $info_web = DB::table('info_web')->paginate($perPage);
    
        return view('admin.index', [
            'info_web' => $info_web
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request){
        $request->validate([
            'clave' => 'required_without_all:valor',
            'valor' => 'required_without_all:clave',
        ]);
    
        DB::table('info_web')->insert([
            'clave' => $request->input('clave'),
            'valor' => $request->input('valor'),
            'icon' => $request->input('icon'),
        ]);
    
        return redirect()->route('admin');
    }
    


    public function edit($id){
        $info_web = DB::table('info_web')->whereId($id)->first();
        
        return view('admin.edit', [
            'info_web' => $info_web
        ]);
    }


    public function update(Request $request, $id){
        DB::table('info_web')->whereId($id)->update([
            'clave' => $request->input('clave'),
            'valor' => $request->input('valor'),
            'icon' => $request->input('icon'),
            'estado' => $request->input('estado'),
        ]);
        return redirect()->route('admin');
    }
    
}
