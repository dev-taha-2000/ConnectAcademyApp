@extends('layouts/home')
@section('title')
 edit revenue
@endsection 
@section('content')  
        <div class="w-50 m-auto mt-4  p-3 rounded shadow-lg p-3 mb-5 bg-body rounded "> 
            <h1 class="text-center">edit revenue</h1>  
            <form method="POST" action="{{route('revenue.update',$revenue->id)}}">   
                {{ csrf_field() }}
                @method('PUT') 
                <input type="hidden" name="id" value="{{$revenue->id}}">  
                <div>
                    <input type="text" name="type" class="form-control w-100 mt-3"  value="{{$revenue->type}}" placeholder="type de revenue">
                    @error('type')  
                    <span class="text-danger">{{$message}}</span> 
                    @enderror 
                </div>
                <div>
                    <input type="text" name="prix" class="form-control w-100 mt-3"  value="{{$revenue->prix}}" placeholder="prix">
                    @error('prix')   
                    <span class="text-danger">{{$message}}</span> 
                    @enderror  
                </div> 
                <div class="text-center mt-3">
                    <button type="submit" class="btn  w-25 fw-bold" style="background-color: #e91e63">save</button>
                </div>
            </form>   
        </div> 
    
@endsection 
