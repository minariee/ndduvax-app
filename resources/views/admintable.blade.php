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
        <li class="sidebar-item active"><a class="sidebar-link" href="{{url('/admin-table')}}"> 
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
            <li class="sidebar-item"><a class="sidebar-link" href="#"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#browser-window-1"> </use>
              </svg>Vaccine Lists </a></li>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="#"> 
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
      <h2 class="mb-0 p-1">User Account</h2>
    </div>
  </header>
  
<style>
    td{
        width:130px;
        text-align:center;
    }
    th{
        width:130px;
        text-align:center;
    }

    .btn-primary, .btn-primary-outline , .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #012b09 !important;
}

    .btn-success{
    background-color: #012b09 !important;
}  

    .container{
        padding:50px;
    }

</style>

    

    <div class="container">
      {{--<center><h1>User Accounts</h1></center>--}}
    <table style ="border:2px solid black;margin-right:auto;margin-left:auto;">
        <tr>

            <th>Name  </th>
            <th>Occupation</th>
            <th>Date</th>
            <th>Type of Vaccine</th>
            <th>Dose </th>
        </tr>
        @foreach ($accounts as $account)
        <tr>

            <td>{{ $account->name}}</td>
            <td>{{ $account->occupation }}</td>
            <td>{{ $account->date}}</td>
            <td>{{ $account->type_of_vaccine}}</td>
            <td>{{ $account->dose}}</td>
            
            <td>
            <a href="edit-admin/{{ $account->id }}" class= "btn btn-success">Edit</a>
            </td>
            
            <td>
                <form action="{{url('delete-admin/'.$account->id)  }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach        
    </table>
    <br><center><a href="{{url('admin-form')}}" class="btn btn-primary">Add Record</a></center>
  </div>
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