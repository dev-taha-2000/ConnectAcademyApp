<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use App\Providers\RouteServiceProvider; 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller 
{

    use RegistersUsers;   
    public function __construct()
    {
        $this->middleware('auth');      
    }   

    public function create() 
    {
       return view('users.create');       
    }  
    

    protected function store(Request $request) 
    {  
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);   

        $User=[ 
            'name'=>$request->name,
            'password'=>Hash::make($request->password),
            'email'=>$request->email,
            'role'=>$request->role 
        ]; 
      
        $name=$User['name'];$password = $User['password'];$email = $User['email'];$role = $User['role']; 
        User::insert(['name'=> $name ,'password'=>$password,'email'=>$email,'role'=>$role]);   
        return redirect()->route('home')->with('successDelete','success create user'); 
    } 

    public function destroy(Request $request)    
    {
       if(isset($request->id)){
        User::findOrFail($request->id)->delete();
        return redirect('/home')->with('successDelete','success delete');   
       }else{
        return redirect('/home')->with('successDelete','select id');   
       }
    }  
}
