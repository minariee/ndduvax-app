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
        <li class="sidebar-item"><a class="sidebar-link" href="{{url('/admin-table')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Admin Record </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="{{url('/user-list')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Patients Record </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="{{url('/sms-semaphore')}}"> 
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
        {{--<li class="sidebar-item active"> <a class="sidebar-link" href="{{url('/admin-form')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#imac-screen-1"> </use>
            </svg>Add Record </a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href="{{url('/admin-table')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#chart-1"> </use>
            </svg>Admin List </a></li>
       <li class="sidebar-item"> <a class="sidebar-link" href="#"> 
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
      <h2 class="mb-0 p-1">Add Vaccine Record</h2>
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

    {{--<div class="content-inner w-100">
        <!-- Page Header-->
        <header class="bg-white shadow-sm px-4 py-3 z-index-20">
          <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">Tables</h2>
          </div>
        </header>
        <h1>Vaccine Form</h1>
        <form method="POST" action="/admin-form">
        @csrf
        <table border="2">
        <tr>
        <td>Name: <input name="name" type="text"><br></td>
        <td>Occupation: <input name="occupation" type="text"><br></td>
        <td>Date: <input name="date" type="date"><br></td>
        <td>Type of Vaccine: <input name="type_of_vaccine" type="text"><br></td>
        <td>Dose: <input name="dose" type="text"><br></td>
        </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
    </div>--}}

    <form method="POST" action="/admin-form">
      @csrf
      <div class="container">
        <hr>
        <label for="name"><b>Email</b></label>
        <input type="text" placeholder="Enter Name" input name="name" required>
    
        <label for="occupation"><b>Occupation</b></label>
        <input type="text" placeholder="Enter Occupation" input name="occupation" id="occupation" required>
    
        <label for="date"><b>Date</b></label>
        <input type="date" placeholder="Date" input name="date" id="date" required>

        <label for="type_of_vaccine"><b>Type of Vaccine</b></label>
        <input type="text" placeholder="Enter Name" input name="type_of_vaccine" id="type_of_vaccine" required>
    
        <label for="dose"><b>Dose</b></label>
        <input type="text" placeholder="Enter Dose" input name="dose" id="dose" required>
        <hr>

        <button type="submit" class="button">Add Record</button>
      </div>
    </form>
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