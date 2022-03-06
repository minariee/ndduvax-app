@extends('layouts.dashboard-layout')

@section('content')
<div class="page-content d-flex align-items-stretch"> 
    <!-- Side Navbar -->
    <nav class="side-navbar z-index-40">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="/assets/images/avatar-3.jpg" alt="...">
        <div class="ms-3 title">
          <h1 class="h4 mb-2">Admin</h1>
          <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Nurse</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Menu</span>
      <ul class="list-unstyled py-4">
        <li class="sidebar-item"><a class="sidebar-link" href="index.html"> 
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
        <li class="sidebar-item"><a class="sidebar-link" href="login.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#disable-1"> </use>
            </svg>Content Management </a></li>
      </ul><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Settings</span>
      <ul class="list-unstyled py-4">
        <li class="sidebar-item"> <a class="sidebar-link" href="{{url('/admin-form')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#imac-screen-1"> </use>
            </svg>Add Admin </a></li>
        <li class="sidebar-item active"> <a class="sidebar-link" href="{{url('/admin-table')}}"> 
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
            </svg>Additional Menu </a></li>
      </ul>
    </nav>
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
    background-color: #006400 !important;
}

    .btn-success{
    background-color: #006400 !important;
}  

</style>

    <center><h1>User Accounts</h1></center>
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

    <center><a href="{{url('admin-form')}}" class="btn btn-primary">Add Record</a></center>
@endsection