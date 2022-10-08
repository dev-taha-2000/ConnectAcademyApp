@extends('layouts/home')
@section('title')
 ceate depence   
@endsection 
@section('style')   
  <style>fieldset {border: 1px solid blue;border-radius: 5px;}legend, label{color: blue; font-size: 24px;font-family: sans-serif;}input{font-size: 18px;padding: 5px;height: 35px;border: 1px solid rgba(105, 105, 105, 0.71);outline: none;border-radius: 5px;color: rgb(9, 9, 9);}datalist {background-color: white;border: 1px solid rgb(5, 5, 5);border-radius: 0 0 5px 5px;border-top: none;font-family: sans-serif; padding: 5px;max-height: 10rem;overflow-y: auto}option{background-color: white;padding: 4px;color: rgb(7, 7, 8);margin-bottom: 1px;font-size: 15px;cursor: pointer;}option:hover, .active{background-color: rgb(101, 158, 211);}</style>
@endsection
@section('content')  
    <div class="text-center">
      <h1>Create depence</h1>
    </div>
    <div class="w-50 m-auto mt-4  p-3 rounded shadow-lg p-3 mb-5 bg-body rounded ">   
      <form  action="{{route('depence.store')}}" method="post">      
        @csrf      
        <div class="modal-body">
          <div class="input-group input-group-outline">   
            <fieldset style="width:100%"> 
              <input  class="w-100" autocomplete="off" role="combobox" list="" id="input" name="type" placeholder="Select Type....."> 
              <datalist id="type" role="listbox" class="w-100">
                @foreach ($depence as $item) 
                  <option value="{{$item->type}}">{{$item->type}}</option>
                @endforeach
              </datalist>
            </fieldset>  
          </div>
          @error('type')  
          <span class="text-danger">{{$message}}</span> 
          @enderror
          <div class="input-group input-group-outline mt-4"> 
            <input type="text" id="prix"  name="prix" class="w-100"  placeholder="prix" autocomplete="off" >   
          </div>
          @error('prix')  
          <span class="text-danger">{{$message}}</span> 
          @enderror
      
        <div class="mt-4 text-center">
          <button type="submit" id="Submit" class="btn w-100" style="background-color:#e91e63;color:aliceblue">Save changes</button> 
        </div> 
       </div> 
      </form>  
    </div>  
@endsection


