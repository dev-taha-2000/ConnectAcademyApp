<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController; 
use App\Http\Controllers\AvancesController;  
use App\Http\Controllers\HomeController;  
use App\Http\Controllers\UsersController;     
use App\Http\Controllers\RevenueController;     
use App\Http\Controllers\DepenceController;     
use App\Http\Controllers\view;   
use App\Http\Controllers\imprimer;    
use App\Http\Controllers\search;     
  

Auth::routes();  
Route::get('/', function () {
    return view('welcome'); 
});
Route::get('/home/createUser', function () {
    return view('users.Create');   
});


Route::get('depence/search',[DepenceController::class,'search'])->name('depence.Search');                   
Route::get('revenue/search',[RevenueController::class,'search'])->name('revenue.Search');                 
Route::resource('/users',UsersController::class);             
Route::resource('/revenue',RevenueController::class);              
Route::resource('/depence',DepenceController::class);               
Route::resource('/students', StudentsController::class);           
Route::resource('/avence', AvancesController::class);            
Route::resource('/view', view::class);                
Route::post('/imprimer', [imprimer::class,'imprimer'])->name('imprimer');              
Route::get('/home', [HomeController::class, 'index'])->name('home'); 

