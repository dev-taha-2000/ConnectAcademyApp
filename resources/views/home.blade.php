@extends('layouts/home')
@section('title')
  dashboard || connectAcademy  
@endsection 
  @section('content')
  @include('inc/aside') 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- End Navbar -->
    <div class="container-fluid py-4 mt-4"> 
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-currency-dollar mt-2" viewBox="0 0 16 16" style="color: aliceblue">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                </svg>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Dépense</p> 
                <h4 class="mb-0">{{$depence}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3"> 
              <h6>{{$sumDepence}} DH</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2"> 
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-fill mt-2" viewBox="0 0 16 16" style="color: aliceblue">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">students</p>
                <h4 class="mb-0">{{$students}}</h4>
              </div>
            </div> 
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <h6>{{$sumStudents}} DH</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute" >
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-currency-dollar mt-2" viewBox="0 0 16 16" style="color: aliceblue">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                </svg>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Revenue</p>
                <h4 class="mb-0">{{$revenue}}</h4> 
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <h6>{{$sumRevenue}} DH</h6>
            </div>
          </div>
        </div>
      </div>
      @if (Auth::user()->role == "admin")  
      <div class="row mt-4">
        <div class=" d-flex justify-content-between" style="width:36%"> 
          <h3 style="display: inline">Users</h3>    
          <span><a href="{{route('users.create')}}"><button class="btn btn-primary">Create User</button></a></span>
        </div>
        <div class="d-flex justify-content-between shadow p-3 mb-5 bg-body rounded" style="background-color: rgb(255, 255, 255);border-radius:10px">
          <div > 
            <div style="height:20px">
              @if($message=Session::get('successDelete')) 
                <div class="alert alert-success">{{__($message)}}</div>                     
              @endif
            </div>
             <table class="table w-50">
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>role</th> 
                  <th>dalete</th> 
                </tr>
                @foreach ($users as $item)
                <tr>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td> 
                  <td>{{$item->role}}</td>       
                  <td class="text-center"><span>
                    <form  action="{{route('users.destroy',$item->id)}}" method="post">    
                      @csrf
                      @method('DELETE') 
                      <input type="hidden" name='id' value="{{$item->id}}"> 
                      <button class="bg-primary rounded show-alert-delete-box" style="border:none;color:azure">delete</button>
                    </form>  
                  </span></td>      
                </tr> 
                @endforeach  
             </table>
          </div> 
          <div style="width:100%;max-width:500px;height:100%">  
            <canvas id="myChart" ></canvas> 
          </div>  
      </div>  
      </div>
      @endif
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.google.com" class="font-weight-bold" target="_blank">Connect Academy</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.google.com" class="nav-link text-muted" target="_blank">Connect Academy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Connect Academy</h5>
          <p>See my dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">  
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->  
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.min.js"></script>
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <script src="js/plugins/chartjs.min.js"></script>
  <script>
  var xValues = ["students", "les revenues", "les depences","users"];  
  var yValues = [{{$students}},{{$revenue}}, {{$depence}},{{$User}}];  
  var barColors = ["#00B0FF", "#005CFF","#FF0077","#B72165"]; 
   
  new Chart("myChart", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {display: false},
      title: {
        display: true,
        text: "World Wine Production 2018"
      }
    }
  });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/material-dashboard.min.js?v=3.0.0"></script>
  @endsection 
