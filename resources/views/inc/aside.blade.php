<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" style="background: rgb(8, 8, 90);" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{route('home')}}" > 
        <img src="img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link text-white <?php if( basename($_SERVER['REQUEST_URI'])=="home"){ echo "asidebar_active";}?>" href="{{url('/home')}}" >
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">  
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a> 
        </li> 
       
        <li class="nav-item">
          <a class="nav-link text-white <?php if( basename($_SERVER['REQUEST_URI'])=="students"){ echo "asidebar_active";}?>" href="{{route('students.index')}}">  
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">students</span>
          </a>
        </li> 
        @if (Auth::user()->role == "admin")
        <li class="nav-item">
          <a class="nav-link text-white <?php if( basename($_SERVER['REQUEST_URI'])=="revenue"){ echo "asidebar_active";}?>" href="{{url('/revenue')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i> 
            </div>
            <span class="nav-link-text ms-1">Profit</span>
          </a>
        </li>
        @endif 
       
        @if (Auth::user()->role == "admin")
        <li class="nav-item">
          <a class="nav-link text-white <?php if( basename($_SERVER['REQUEST_URI'])=="depence"){ echo "asidebar_active";}?>" href="{{url('/depence')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i> 
            </div>
            <span class="nav-link-text ms-1">Dépence</span> 
          </a>
        </li> 
        @endif
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">{{__('logout')}}</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li> 
      </ul>
    </div>
</aside>