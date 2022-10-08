<?php

namespace App\Http\Controllers;

use App\Models\students;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
      
    }  
    
    public function index()
    {   
        if(isset($_GET['search'])){
            $search =$_GET['search']; 
            $sum = students::sum('paimentTotal'); 
            $students=DB::table('students')->where('CIN','LIKE','%'.$search.'%')->paginate(7);   
            return view('students.index',compact('students','sum'));  
        }else{
            $sum = students::sum('paimentTotal'); 
            $students = students::latest()->paginate(7); 
            return view('students.index',compact('students','sum'));   
        }
    } 
    public function create(){
        return view('students.create'); 
    }
    public function store(Request $request){    
        $request->validate([
            'username'=>'required',
            'email'=>'required|email', 
            'phone'=>'required|numeric|min:10', 
            'paimentTotal'=>'required|regex:/^\d+(\.\d{1,2})?$/', 
            'formation'=>'required',
            'CIN'=>'required'
        ]);    
        students::create($request->all());   
        return redirect()->route('students.index')->with('success','operatin success'); 
      
    }

   
    public function show(students $students)
    {
        //
    }
   
   
    public function edit(Request $request)  
    {    
        $results = DB::table('students')->where('id',$request->id)->get(); 
        return view('students/edit',compact('results')); 
    }

    
    public function update(Request $request, students $students){  
        $request->validate([
            'username'=>'required',
            'email'=>'required|email', 
            'phone'=>'required|numeric|min:10', 
            'paimentTotal'=>'required|regex:/^\d+(\.\d{1,2})?$/', 
            'formation'=>'required',
            'CIN'=>'required'
        ]);     
        if(isset($request->id)){
            //$students->update($request->all()); 
            $username=$_POST['username'];$email=$_POST['email'];$phone=$_POST['phone'];$paimentTotal=$_POST['paimentTotal'];
            $formation=$_POST['formation'];$CIN=$_POST['CIN']; 
            //DB::table('users')->updateOrInsert(['email' =>$email, 'username' =>$username,'phone' => $phone,'paimentTotal' => $paimentTotal,'formation' => $formation,'CIN' =>$CIN,],[ 'id'=>$request->id]);
            $affected = students::where('id',$request->id)->update(['email' =>$email, 'username' =>$username,'phone' => $phone,'paimentTotal' => $paimentTotal,'formation' => $formation,'CIN' =>$CIN,]);
            return redirect()->route('students.index')->with('success','operatin success id');   
        }else{
            return redirect()->route('students.index')->with('success','Pleas select id');  
        }
    } 


    public function destroy(Request $request)
    {
        if(isset($request->id)){
            students::findOrFail($request->id)->delete();
            return redirect()->route('students.index')->with('success','Opération terminée avec succès');
        }else{
            return redirect()->route('students.index')->with('success','please select id');
        }  
    } 
}
