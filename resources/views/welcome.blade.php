@extends('layoute') 
@section('title')App||ConnectAcademy @endsection  
@section('content')
     <!-- Spinner Start -->
     <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End --> 
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5"> 
            <h2 class="m-0" style="color: rgb(63,61,160);
            color: linear-gradient(90deg, rgba(63,61,160,1) 26%, rgba(137,36,129,1) 51%, rgba(170,72,82,1) 89%);"><img src="img/logo.png" alt="logo" style="height:50px;width:50px;"> ConnectAcademy</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            </div>
            <a href="{{url('/login')}}" class="btn py-4 px-lg-5 d-none d-lg-block" style="background: rgb(63,61,160);
            background: linear-gradient(90deg, rgba(63,61,160,1) 26%, rgba(137,36,129,1) 51%, rgba(170,72,82,1) 89%); color: white;">Login Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End --> 
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">L'ESPOIR VIT ICI</h5>
                                <h1 class="display-3 text-white animated slideInDown">CONNECT ACADEMY</h1>
                                <p class="fs-5 text-white mb-4 pb-2">POUR LA FORMATION ET LE CONSEIL</p>
                                <a href="{{url('/login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">LogIN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">L'ESPOIR VIT ICI</h5>
                                <h1 class="display-3 text-white animated slideInDown">CONNECT ACADEMY</h1>
                                <p class="fs-5 text-white mb-4 pb-2">C'est aider les jeunes chercheurs d'emploi, porteurs de projets, femmes, étudiants et enfants par des programmes de formation d'accompagnement… 
                                </p>
                                <a href="{{url('/login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">LogIN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
@endsection