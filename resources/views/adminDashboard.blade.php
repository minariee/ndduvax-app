@extends('layouts.dashboard-layout')

@section('content')
    <div class="page-content d-flex align-items-stretch"> 
      <!-- Side Navbar -->
      <nav class="side-navbar z-index-40">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="/assets/images/avatar-3.jpg" alt="...">
          <div class="ms-3 title">
            <h1 class="h4 mb-2">
              {{ Auth::user()->name }}
            </h1>
            <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Nurse</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Menu</span>
        <ul class="list-unstyled py-4">
          <li class="sidebar-item active"><a class="sidebar-link" href="index.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#real-estate-1"> </use>
              </svg>Dashboard </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="tables.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#portfolio-grid-1"> </use>
              </svg>Admin Record </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="charts.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#sales-up-1"> </use>
              </svg>Patients Record </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="forms.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#survey-1"> </use>
              </svg>SMS </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#browser-window-1"> </use>
              </svg>Vaccine Lists </a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown">
              <li><a class="sidebar-link" href="#">Page</a></li>
              <li><a class="sidebar-link" href="#">Page</a></li>
              <li><a class="sidebar-link" href="#">Page</a></li>
            </ul>
          </li>
          <li class="sidebar-item"><a class="sidebar-link" href="login.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#disable-1"> </use>
              </svg>Content Management </a></li>
        </ul><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Extras</span>
        <ul class="list-unstyled py-4">
          <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#imac-screen-1"> </use>
              </svg>Demo </a></li>
          <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#chart-1"> </use>
              </svg>Demo </a></li>
          <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#quality-1"> </use>
              </svg>Demo </a></li>
          <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#security-shield-1"> </use>
              </svg>Demo </a></li>
        </ul>
      </nav>
      <div class="content-inner w-100">
          <header class="bg-white shadow-sm px-4 py-3 z-index-20">
            <div class="container-fluid px-0">
              <h2 class="mb-0 p-1">Welcome Admin!</h2>
            </div>
          </header>
      </div>
@endsection