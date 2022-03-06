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
        <li class="sidebar-item"><a class="sidebar-link" href="{{url('/admin-dashboard')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Dashboard </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="tables.html"> 
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
        <li class="sidebar-item"> <a class="sidebar-link" href="{{url('/admin-form')}}"> 
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
            </svg>Additional Menu </a></li>
      </ul>
    </nav>
    <div class="content-inner w-100">
        <header class="bg-white shadow-sm px-4 py-3 z-index-20">
          <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">List of Users</h2>
          </div>
        </header>
        <section class="pb-0">
            <div class="container-fluid">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="row gx-3 bg-white">
        <div class="row"> 
            <div class="col-md-8 offset-2">
                <table class="table table-responsive table-bordered">
                  <!-- Button trigger modal -->
                  <div class="pull-right">
                    <a class="btn btn-success" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('users.create') }}" title="Add User"> <i class="fas fa-plus-circle"></i>
                        </a>
                </div>

<br><br>
                    <thead class="table bg-success">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created at</th>
                        <th width="280px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id}}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->user_type}}</td>
                                <td>{{ $user->created_at}}</td>
                                <td>
                                  <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                    <a data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                                        data-attr="{{ route('users.show', $user->id) }}" title="show">
                                        <i class="fas fa-eye text-success  fa-lg"></i>
                                    </a>
        
                                    <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('users.edit',$user->id) }}">
                                        <i class="fas fa-edit text-gray-300"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
        
                                    <button type="submit" title="delete" style="border: none; background-color:transparent;"><i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                              </td>
                              </tr>
                            @endforeach
                    
                    </tbody>
                  </table>
                  {{ $users->links()}}
            </div>
        </div>
      
    </section>
         <!-- Page Footer-->
        <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
          <div class="container-fluid">
            <div class="row gy-2">
              <div class="col-sm-6 text-sm-start">
                <p class="mb-0">NDDU <a href="#" class="text-white text-decoration-none">VAX APP</a></p>
              </div>
              <div class="col-sm-6 text-sm-end">
                <p class="mb-0">Copyright &copy; 2022</p>
              </div>
            </div>
          </div>
        </footer> 
    </div>

     <!-- medium modal -->
     <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body" id="mediumBody">
                 <div>
                     <!-- the result to be displayed apply here -->
                 </div>
             </div>
         </div>
     </div>
 </div>
    <script>
    // display a modal (medium modal)
    $(document).on('click', '#mediumButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#mediumModal').modal("show");
                $('#mediumBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });

</script>
@endsection