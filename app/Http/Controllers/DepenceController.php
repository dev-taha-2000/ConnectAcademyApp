<?php 

namespace App\Http\Controllers;

use App\Models\depence;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class depenceController extends Controller  
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
            $depence=depence::whereBetween('created_at',[$request->from,$request->to])->latest()->paginate(7); 
            $sum = depence::whereBetween('created_at',[$request->from,$request->to])->sum('prix');         
            return view('depence.index',compact('depence','sum'));  
        }else if(!empty($request->from) && !empty($request->to) && !empty($request->type)){
            $depence=depence::where('type',$request->type)->whereBetween('created_at',[$request->from,$request->to])->latest()->paginate(7);
            $sum = depence::where('type',$request->type)->whereBetween('created_at',[$request->from,$request->to])->sum('prix');  
            return view('depence.index',compact('depence','sum'));      
        }else{  
        $depence=depence::latest()->paginate(7);     
        $sum = depence::sum('prix');   
        return view('depence.index',compact('depence','sum'));
        }          
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
        depence::create($request->all());
        return redirect()->route('depence.index')->with('successCreate','success creayte depence');
    }

    public function create()
    {
        $depence = depence::get();
        return view('depence.create',compact('depence')); 
    } 
    public function search()   
    {
        $depence=depence::get();   
        return view('depence.Search',compact('depence')); 
    } 

    public function show(depence $depence){ 

    }
    public function edit(depence $depence)
    {
        if(Auth::user()->role == 'user'){
            return view('autorisation');  
        }  
      
        return view('depence.edit',compact('depence'));
    } 

   
    public function update(Request $request, depence $depence)
    {
        if(Auth::user()->role == 'user'){
            return view('autorisation');  
        }  
        $request->validate([ 
            'type'=>'required',
            'prix'=>'required|regex:/^\d+(\.\d{1,2})?$/'   
        ]);  
        $depence->update($request->all());
        return redirect()->route('depence.index')->with('successEdit','success edit depence');      
    }


    public function destroy(depence $depence)
    {
        if(Auth::user()->role == 'user'){
            return view('autorisation');  
        }  
        $depence->delete();
        return redirect()->route('depence.index')->with('successDelete','success delete depence');      
    }
}
