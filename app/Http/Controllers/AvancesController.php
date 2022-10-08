<?php

namespace App\Http\Controllers;

use App\Models\avances;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvancesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    
    public function index(Request $request)
    {
        $students=DB::table('students')->where('id',$request->id)->get();   
        return view('avence.index',compact('students')); 
    } 
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'date'=>'required|date',
            'avence'=>'required|regex:/^\d+(\.\d{1,2})?$/', 
            'id_utidient'=>'required'   
        ]); 
        avances::create($request->all()); 
        return redirect()->route('students.index')->with('success','operatin success'); 

    } 
}
