<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Models\students; 
use App\Models\depence; 
use App\Models\revenue;  


use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth'); 
    } 

    public function index()
    {
        $User = User::count();    
        $revenue = revenue::count();    
        $depence = depence::count();     
        $students = students::count();    
        $sumDepence = depence::sum('prix');  
        $sumRevenue = revenue::sum('prix');  
        $sumStudents = students::sum('paimentTotal');  
        $users = User::latest()->paginate(10); 
        return view('home',compact('users','students','depence','revenue','User','sumDepence','sumRevenue','sumStudents'));   
    }  

}
