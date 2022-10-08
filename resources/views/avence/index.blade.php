@extends('layouts/home')
@section('title')
 Avence 
@endsection  
@section('content')  
    @foreach ($students as $item)
        <div class="w-50 m-auto mt-4  p-3 rounded shadow-lg p-3 mb-5 bg-body rounded ">   
            <form method="POST" action="{{route('avence.store')}}">    
                @csrf
                <div class="text-center"> 
                    <h1>Avence de {{$item->username}}</h1>
                </div>
                <div> 
                    <input type="text" name="username" class="form-ontrol w-100" placeholder="username" value="{{$item->username}}">
                    @error('username')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <input type="text" name="avence" class="form-ontrol w-100 mt-3" placeholder="avence en DH" autocomplete="off">
                    @error('avence')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <input type="text" id="datepicker" name="date" class="form-ontrol w-100 mt-3" placeholder="date" autocomplete="off">
                    @error('date') 
                    <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
                <div>
                    <input type="hidden" name="id_utidient" value="{{$item->id}}"> 
                </div> 
                <div class="text-center"> 
                    <button type="submit" class="btn w-25 fw-bold mt-3" style="background-color: #e91e63;color:black">Save</button>
                </div>
            </form>   
        </div>
    @endforeach 
@endsection 
