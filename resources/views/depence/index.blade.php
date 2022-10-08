@extends('layouts/home')
@section('title')
 depence  
@endsection 
  @section('content')
  @include('inc/aside') 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <a href="{{route('depence.create')}}">
              <button class="btn btn-primary mt-2" >Create depence</button>  
            </a>
            <a href="{{url('/depence/search')}}">   
              <button class="btn btn-primary mt-2 ms-3" >deep research</button> 
            </a>
            <button class="btn  mt-2 ms-3 fw-bold"  style="background-color: rgb(12, 12, 104);color:aliceblue;font-size:12px;">TOTAL DE PRIX : {{number_format($sum)}} DH</button> 
          </nav>
        </div> 
    </nav> 
   
    <div class="container  mt-3 w-50 m-auto"> 
      @if ($message = Session::get('successDelete'))     
      <div class="alert alert-success text-center" role="alert">  
          {{__($message)}} 
      </div> 
      @endif  
      @if ($message = Session::get('successCreate'))    
      <div class="alert alert-success text-center" role="alert">  
          {{__($message)}} 
      </div> 
      @endif  
      @if ($message = Session::get('successEdit'))     
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
                  <h6 class="text-white text-capitalize ps-3">depence table</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2  mt-n-5">
                <div class="table-responsive p-0"> 
                  <table class="table align-items-center mb-0 mt-n-5">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">type de depence</th> 
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">prix</th> 
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date</th>  
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">update</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($depence as $item)   
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1 ms-">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm ms-2">{{$item->type}}</h6> 
                            </div>
                          </div>
                        </td> 
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{number_format($item->prix)}} DH</p> 
                        </td>
                   
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{$item->created_at}}</span> 
                        </td>  
                        <td class="align-middle text-center">
                          <form method="POST" action="{{route('depence.edit',$item->id)}}"> 
                            {{csrf_field()}} 
                            @method('GET') 
                            <input type="hidden" name="id" value="{{$item->id}}">   
                            <button type="submit" class="btn btn-outline-success text-center" >Update</button>  
                          </form>   
                        </td>  
                        <td class="align-middle text-center">
                          <form action="{{route('depence.destroy',$item->id)}}" method="POST"> 
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
          {{$depence->links()}}     
        </div>  
       
  </main>   
  @endsection 
