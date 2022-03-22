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
      <li class="sidebar-item active"><a class="sidebar-link" href="{{url('/user-list')}}"> 
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
    {{-- <li class="sidebar-item"> <a class="sidebar-link" href="{{url('/admin-form')}}"> 
          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
            <use xlink:href="#imac-screen-1"> </use>
          </svg>Add Admin </a></li>
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
      <h2 class="mb-0 p-1">Update User</h2>
    </div>
  </header>
  <section class="pb-0">
      <div class="container-fluid">
        <div class="card mb-0">
          <div class="card-body">
            <div class="row gx-3 bg-white">
        
        <div class="container mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $user->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update user</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</button>
            </form>
        </div>
  </section>
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