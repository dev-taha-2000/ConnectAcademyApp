<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\students;

class imprimer extends Controller
{
    public function imprimer(Request $request){
        $students=students::where('id',$request->id)->get();  
        $pdf = PDF::loadView('pdf.index', compact('students'));  
        return $pdf->download('index.pdf'); 
    } 
  
}
