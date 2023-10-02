<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function search(Request $request)
{
    $search = $request->get('search');
    $info_web = DB::table('info_web')->where('clave', 'like', '%'.$search.'%')
        ->orWhere('valor', 'like', '%'.$search.'%')
        ->paginate(15);

    return view('admin.index', ['info_web' => $info_web]);
}


}