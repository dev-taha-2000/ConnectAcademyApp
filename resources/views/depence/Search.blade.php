@extends('layouts/home')
@section('title')
 deep search 
@endsection 
@section('content')  
        <div class="w-50 m-auto mt-4  p-3 rounded shadow-lg p-3 mb-5 bg-body rounded "> 
            <h1 class="text-center"> deep search</h1>  
            <form method="POST" action="{{route('depence.index')}}">  
              @csrf
              @method('GET')    
              <div>  
                <label class="text-dark" for="from">from :</label> 
                <input type="text" name="from" id="datepicker" class="w-100" placeholder="from" autocomplete="off"> 
              </div>
              <div class="mt-3"> 
                <label for="to">to : </label>  
                <input type="text" name="to" id="date"     class="w-100" placeholder="to"   autocomplete="off">  
              </div> 
              <div class="mt-3">
                <label for="type">Type : </label>   
                <select  class="w-100 " name="type" aria-label="Default select example" style="height:30px">  
                  <option selected>select type</option>  
                  @foreach ($depence as $item) 
                      <option value="{{$item->type}}">{{$item->type}}</option>    
                  @endforeach 
                </select> 
              </div>
                <div class="text-center mt-3 ">   
                  <button type="submit" class="btn  w-100 fw-bold" style="background-color:#e91e63;color:aliceblue">filter</button>  
                </div>
              </div> 
            </form> 
        </div>  
@endsection     