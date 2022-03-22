@extends('layouts.dashboard-layout')

@section('content')
<div class="page-content d-flex align-items-stretch"> 
    <!-- Side Navbar -->
    <nav class="side-navbar z-index-40 shrinked">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="/assets/images/avatar-3.jpg" alt="...">
        <div class="ms-3 title">
          <h1 class="h4 mb-2">Admin</h1>
          <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Nurse</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Menu</span>
      <ul class="list-unstyled py-4">
        <li class="sidebar-item"><a class="sidebar-link" href="{{url('/admin-dashboard')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Dashboard </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="tables.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Admin Record </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="{{url('/user-list')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Patients Record </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="forms.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>SMS </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="forms.html"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#browser-window-1"> </use>
              </svg>Vaccine Lists </a></li>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="login.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#disable-1"> </use>
            </svg>Content Management </a></li>
      </ul><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Settings</span>
      <ul class="list-unstyled py-4">
        <li class="sidebar-item active"> <a class="sidebar-link" href="{{url('/admin-form')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#imac-screen-1"> </use>
            </svg>Add Record </a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href="{{url('/admin-table')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#chart-1"> </use>
            </svg>Admin List </a></li>
       {{--<li class="sidebar-item"> <a class="sidebar-link" href="#"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#quality-1"> </use>
            </svg>Additional menu </a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#security-shield-1"> </use>
            </svg>Additional Menu </a></li>--}}
      </ul>
    </nav>
    <div class="content-inner w-100">
    <header class="bg-white shadow-sm px-4 py-3 z-index-20">
      <div class="container-fluid px-0">
        <h2 class="mb-0 p-1">Edit Vaccine Form</h2>
      </div>
    </header>
    <style>
        * {box-sizing: border-box}
    
    /* Add padding to containers */
    .container {
    padding: 16px;
    }
    
    /* Full-width input fields */
    input[type=text], input[type=date]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }
    
    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }
    
    /* Overwrite default styles of hr */
    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }
    
    /* Set a style for the submit/register button */
    .button {
    background-color: #012b09;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }
    
    .addbutton:hover {
    opacity:1;
    }
      </style>
<section class="pb-0">
        <div class="container-fluid">
          <div class="card mb-0">
            <div class="card-body">
              <div class="row gx-3 bg-white">  
    <form method="POST" action="{{url('update-account/'.$account->id)}}">
        @csrf
        @method('PUT')
        
        <label for="name"><b>Name</b></label>
        <input type="text"  input name="name" value="{{$account -> name}}">

        <label for="occupation"><b>Occupation</b></label>
        <input type="text" input name="occupation" value="{{$account->occupation}}">

        <label for="date"><b>Date</b></label>
        <input type="date" input name="date" value="{{$account->date}}">

        <label for="type_of_vaccine"><b>Type of Vaccine</b></label>
        <input type="text" input name="type_of_vaccine" value="{{$account->type_of_vaccine}}">

        <label for="dose"><b>Dose</b></label>
        <input type="text" input name="dose" value="{{$account->dose}}">

        <button type="submit" class="button">Edit Record</button>
    </form>
</section>   
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
@endsection