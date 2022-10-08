@extends('layouts/home')
@section('title')
 Avence 
@endsection 
@section('content')   
    <div class="shadow-lg p-3 mb-5 bg-body rounded m-auto mt-3 " style="height:70vh;width:70%;background-color:rgb(255, 255, 255)">  
        <div class="text-center "> 
          @foreach ($students as $item)
            <h4>Les information de {{$item->username}}</h4>
          @endforeach
        </div> 
        <div class="d-flex justify-content-between">
            <div class="rounded bg-light shadow-lg p-3 mt-4 bg-bod " style="height:250px;width:415px;overflow:scroll;">
                @foreach ($avence as $item)  
                <p style="color: black">Avence : {{number_format($item->avence)}} DH / le  {{$item->created_at}}</p> 
                @endforeach
                <span>ToTal: @foreach ($total as $item)
                    {{number_format($item->total)}} DH
                @endforeach </span> 
            </div>   
            <div class="text-center mt-4" style="height:250px;width:48%;background-color:rgb(237, 237, 237)"> 
                @foreach ($students as $item )
                    <span>CIN : {{$item->CIN}}</span><br>  
                    <span>nom et prenom : {{$item->username}}</span><br>   
                    <span>formation : {{$item->formation}}</span><br>   
                    <span>paiment Total : {{number_format($item->paimentTotal)}} DH</span><br>    
                    <span>teliphone : {{$item->phone}}</span><br>    
                    <span>email: {{$item->email}}</span><br>    
                    <span>inscreption: {{$item->created_at}}</span>    
                @endforeach  
            </div> 
       </div>
       <div class="text-center"> 
       <form action="{{route('imprimer')}}" method="post">   
        @csrf
        @foreach ($students as $item )
        <input type="hidden" name="id" value="{{$item->id}}">   
        @endforeach
        <button class="btn btn-primary mt-3"> 
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                </svg>
            </span>   
            imprimer
        </button>
       </form> 
       </div>
    </div>
     
    </div>
@endsection 
