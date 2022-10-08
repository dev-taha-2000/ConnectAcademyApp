@extends('layouts/home')
@section('title')
 edit student 
@endsection 
@section('content') 
    @foreach ($results as $item)
        <div class="w-50 m-auto mt-4  p-3 rounded shadow-lg p-3 mb-5 bg-body rounded ">   
            <form method="POST" action="{{route('students.update',$item->id)}}" > 
                {{ csrf_field() }} 
                @method('PUT') 
                <input type="hidden" name="id" value="{{$item->id}}"> 
                <div class="text-center">
                    <h1>edit {{$item->username}}</h1>
                </div>
                <div>
                    <input type="text" name="username" class="form-control w-100 mt-3"  value="{{$item->username}}" placeholder="nome et prenom">
                    @error('username')
                    <span  class="text-danger">{{ $message }}</span>
                    @enderror 
                </div>
                <div>
                    <input type="text" name="email" class="form-control w-100 mt-3"  value="{{$item->email}}" placeholder="email">
                    @error('email')
                    <span  class="text-danger">{{ $message }}</span>
                    @enderror 
                </div>
                <div>
                    <input type="text" name="phone" class="form-control w-100 mt-3"  value="{{$item->phone}}" placeholder="phone"> 
                    @error('phone')
                    <span  class="text-danger">{{ $message }}</span>
                    @enderror 
                </div>
             
                <div>
                    <input type="text" name="paimentTotal" class="form-control w-100 mt-3"  value="{{$item->paimentTotal}}" placeholder="paiment total">
                    @error('paimentTotal')
                    <span  class="text-danger">{{ $message }}</span>
                    @enderror 
                </div>
                <div>
                    <select id="formation"  class="form-select form-control mt-3" name="formation" aria-label="Default select example" style="height:47px;">
                        <option selected>Select Formation</option>  
                        <option value="Marketing">Marketing</option>
                        <option value="Administration des entreprise">Administration des entreprise</option> 
                        <option value="Organisation & la gestion de projets">Organisation & la gestion de projets</option>
                        <option value="Communication">Communication publicitaire</option>
                        <option value="Developpement">Developpement d'applications multimédias</option>
                        <option value="contenus web">la création de contenus web</option>
                        <option value="la création web et l'Administration de reseaux">la création web et l'Administration de reseaux</option>
                        <option value="organisation des événements et des séminaires">organisation des événements et des séminaires</option>
                        <option value="Consultations et solutions">Consultations et solutions</option>
                        <option value="Animation socioculturelle">Animation socioculturelle</option>
                    </select>  
                    @error('formation') 
                    <span  class="text-danger">{{ $message }}</span>
                    @enderror 
                </div> 
                <div>
                    <input type="text" name="CIN" class="form-control w-100 mt-3 mb-5"  value="{{$item->CIN}}" placeholder="CIN"> 
                    @error('CIN')  
                    <span  class="text-danger">{{ $message }}</span>
                    @enderror 
                </div>
                <div class="text-center">
                    <button type="submit" class="btn  w-25 fw-bold" style="background-color: #e91e63">save</button>
                </div>
            </form>   
        </div>
    @endforeach
    
@endsection 
