<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class view extends Controller{ 
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    
    public function index(Request $request){
        $students=DB::table('students')->where('id',$request->id)->get();  
        $avence=DB::table('avances')->where('id_utidient',$request->id)->get();  
        $total = DB::table("avances")->select(DB::raw("SUM(avence) as total"))->where('id_utidient',$request->id)->get();  
        return view('view.index',compact('students','avence','total'));    
    }
}
