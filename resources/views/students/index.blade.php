@extends('layouts/home')
@section('title')
 students 
@endsection 
  @section('content')
  @include('inc/aside') 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        
        <div class="container-fluid py-1 px-3 ">
          <nav aria-label="breadcrumb">
            <a href="{{route('students.create')}}">
              <button class="btn btn-primary mt-2" >Create students</button>
            </a>
            <button class="btn  mt-2 ms-3 fw-bold"  style="background-color: rgb(12, 12, 104);color:aliceblue">TOTAL DE PAIMENT : {{number_format($sum)}} DH</button> 
          </nav>
          {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" --}} 
        </div>
       
        <div class=" ms-md-auto pe-md-3 d-flex align-items-center" > 
          <form action="{{route('students.index')}}" method="get">   
            <div class="input-group input-group-outline">
              <label class="form-label">Recherche par CIN</label>
              <input autocomplete="off" type="text" name="search" class="form-control" >
            </div> 
          </form>
        </div> 

    </nav> 
   
    <div class="container  mt-3 w-50 m-auto"> 
      @if ($message = Session::get('success'))    
      <div class="alert alert-success text-center" role="alert">  
          {{__($message)}} 
      </div> 
      @endif  
    </div>   
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">students table</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2  mt-n-5">
                <div class="table-responsive p-0"> 
                  <table class="table align-items-center mb-0 mt-n-5">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">type de revenue</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">formation</th> 
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th> 
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">paiement totale</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">avence</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">view</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">options</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($students as $item)  
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1 ms-">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->username}}</h6> 
                              </div>
                            </div>
                          </td> 
                          <td>
                            <p class="text-xs font-weight-bold mb-0">{{$item->formation}}</p> 
                          </td>
                     
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$item->CIN}}</span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$item->paimentTotal}}</span>
                          </td>
                          <td class="align-middle text-center">
                              <form method="POST" action="{{route('avence.index',$item->id)}}"> 
                                {{ csrf_field() }}   
                                 @method('GET')
                                <span class="text-secondary text-xs font-weight-bold">
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button type="submit" class="btn btn-primary mt-1">Avence</button>
                                </span>
                              </form>  
                          </td> 
                          <td class="align-middle text-center">
                            <form method="POST" action="{{route('view.index',$item->id)}}"> 
                              {{ csrf_field() }}   
                               @method('GET')
                              <span class="text-secondary text-xs font-weight-bold">
                              <input type="hidden" name="id" value="{{$item->id}}">
                              <button type="submit" class="btn  mt-1" style="background-color: blue;color:black">View</button>
                              </span>
                            </form>  
                        </td> 
                          <td class="text-center d-flex">    
                            <form method="POST" action="{{route('students.edit',$item->id)}}"> 
                              {{csrf_field()}} 
                              @method('GET') 
                              <input type="hidden" name="id" value="{{$item->id}}">   
                              <button type="submit" class="btn btn-outline-success text-center" >Update</button>  
                            </form>   
                             <form action="{{route('students.destroy',$item->id)}}" method="POST">  
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="id" value="{{$item->id}}"> 
                              <button type="submit" class="btn btn-outline-danger text-center ms-2 show-alert-delete-box" >delete</button>  
                            </form> 
                          </td>  
                        </tr> 
                      @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="pagination text-center w-100">
          {{$students->links()}}    
        </div>        
  </main>   
  @endsection 
