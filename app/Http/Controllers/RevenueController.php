<?php

namespace App\Http\Controllers;

use App\Models\revenue; 
use App\Models\students; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class RevenueController extends Controller
{
    public function __contruct(){
        $this->middleware('auth'); 
      
    }

    public function index(Request $request)    
    { 
        if(Auth::user()->role == 'user'){
            return view('autorisation');  
        }   
        if(!empty($request->from) && !empty($request->to) && empty($request->type) ){
            $revenue=revenue::whereBetween('created_at',[$request->from,$request->to])->latest()->paginate(7); 
            $sum = revenue::whereBetween('created_at',[$request->from,$request->to])->sum('prix');         
            return view('revenue.index',compact('revenue','sum'));  
        }else if(!empty($request->from) && !empty($request->to) && !empty($request->type)){
            $revenue=revenue::where('type',$request->type)->whereBetween('created_at',[$request->from,$request->to])->latest()->paginate(7);
            $sum = revenue::where('type',$request->type)->whereBetween('created_at',[$request->from,$request->to])->sum('prix');  
            return view('revenue.index',compact('revenue','sum'));      
        }else{  
            $revenue=revenue::latest()->paginate(7);  
            $sum = revenue::sum('prix');   
            return view('revenue.index',compact('revenue','sum'));  
        }
       
       
    }   
    public function search()
    {
        $revenue = revenue::get();   
        return view('revenue.Search',compact('revenue'));     
    }  
    public function create(){
        $revenue = revenue::get();
        return view('revenue.create',compact('revenue')); 
    } 
    public function store(Request $request)  
    {
        if(Auth::user()->role == 'user'){
            return view('autorisation');  
        }  
        $request->validate([ 
            'type'=>'required',
            'prix'=>'required|regex:/^\d+(\.\d{1,2})?$/'   
        ]); 
        revenue::create($request->all());
        return redirect()->route('revenue.index')->with('successCreate','success creayte revenue');
    }


    public function edit(revenue $revenue){
        if(Auth::user()->role == 'user'){
            return view('autorisation');  
        }  
      
        return view('revenue.edit',compact('revenue'));
    } 

   
    public function update(Request $request, revenue $revenue){
        if(Auth::user()->role == 'user'){
            return view('autorisation');  
        }   

        $request->validate([
            'type'=>'required',
            'prix'=>'required|regex:/^\d+(\.\d{1,2})?$/' 
        ]);
        $revenue->update($request->all());
        return redirect()->route('revenue.index')->with('successEdit','success edit revenue');     
    }

    
    public function destroy(revenue $revenue)
    {
        if(Auth::user()->role == 'user'){
            return view('autorisation');  
        }  
        
        $revenue->delete();
        return redirect()->route('revenue.index')->with('successDelete','success delete revenue');     
    }  
    public function show(depence $depence){

    }
}
