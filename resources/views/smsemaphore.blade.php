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
              </svg>Admin Record</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{url('/user-list')}}"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#sales-up-1"> </use>
              </svg>Patients Record </a></li>
          <li class="sidebar-item active"><a class="sidebar-link" href="{{url('/sms-semaphore')}}"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#survey-1"> </use>
              </svg>SMS </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="#"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#browser-window-1"> </use>
              </svg>Vaccine Lists </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="#"> 
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#disable-1"> </use>
              </svg>Content Management </a></li>
        </ul><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Settings</span>
        <ul class="list-unstyled py-4">
          {{--<li class="sidebar-item"> <a class="sidebar-link" href="{{url('/admin-form')}}"> 
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
              <h2 class="mb-0 p-1">Semaphore</h2>
            </div>
          </header>
          <section class="pb-0">
            <div class="container-fluid">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="row gx-3 bg-white">
          <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Add Phone Number
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Enter Phone Number</label>
                 <input type="tel" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                      <button type="submit" class="btn btn-success">Register User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Send SMS message
                            </div>
                            <div class="card-body">
                                    <form method="POST" action="/sms-semaphore">
                                        @csrf
                                        <label>Select users to notify</label>
                                        <select name="users[]" multiple class="form-control">
                                            @foreach ($users as $user)
                                                <option>{{$user->mobile_number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Notification Message</label>
                                     <textarea class="form-control" rows="3"></textarea>
                                    </div>
                 <button type="submit" class="btn btn-success">Send Notification</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
      </div>
@endsection