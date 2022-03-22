@extends('layouts.dashboard-layout')

@section('content')
    <div class="page-content d-flex align-items-stretch"> 
      <!-- Side Navbar -->
      <nav class="side-navbar z-index-40">
        <div class="content-inner w-100">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="/assets/images/avatar-3.png" alt="...">
          <div class="ms-3 title">
            <h1 class="h4 mb-2">{{ Auth::user()->name }}</h1>
            <p class="text-sm text-gray-500 fw-light mb-0 lh-1">User</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Menu</span>
        <ul class="list-unstyled py-4">
          <li class="sidebar-item active"><a class="sidebar-link" href="index.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#real-estate-1"> </use>
              </svg>Dashboard </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{url('/vaccinerecord')}}">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#portfolio-grid-1"> </use>
              </svg>Vaccine Record </a></li>
              
          <li class="sidebar-item"><a class="sidebar-link" href="{{url('vaccinerecord')}}"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#sales-up-1"> </use>
              </svg>Statistics </a></li>
              
          <li class="sidebar-item"><a class="sidebar-link" href="forms.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#survey-1"> </use>
              </svg>Availability </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="forms.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#browser-window-1"> </use>
              </svg>Vaccine Schedule </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{url('/login')}}"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#disable-1"> </use>
              </svg>Login page </a></li>
        </ul><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Sub Menu</span>
       
      </nav>
      <div class="content-inner w-100">
        <header class="bg-white shadow-sm px-4 py-3 z-index-20">
          <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">Welcome {{ Auth::user()->name }}!</h2>
          </div>
        </header>
         <!-- Page Footer-->
         <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
          <div class="container-fluid">
            <div class="row gy-2">
              <div class="col-sm-6 text-sm-start">
                <p class="mb-0">VAX <a href="#" class="text-white text-decoration-none">TRACKING APP</a></p>
              </div>
              <div class="col-sm-6 text-sm-end">
                <p class="mb-0">Copyright &copy; 2022</p>
              </div>
            </div>
          </div>
        </footer> 
    </div>
@endsection