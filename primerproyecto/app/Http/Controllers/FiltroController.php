<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class FiltroController extends Controller
{
    function index(Request $request){
        $documento=DB::table('uploads')->select('estado')->groupBy('estado')->orderBy('Controller','ASC')->get();
        return view('home',['users'=>$documento]);
    }
}
