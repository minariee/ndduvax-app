<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link href="{{URL:: asset('assets/css/choices.css') }}" rel="stylesheet">
    <!-- theme stylesheet-->
    <link href="{{URL:: asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link href="{{URL:: asset('assets/css/custom.css') }}" rel="stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header z-index-50">
          <nav class="navbar px-0 shadow-sm text-white position-relative">
            <div class="container-fluid w-100">
              <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
                <!-- Navbar Header-->
                <div class="navbar-header">
                  <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block" href="index.html">
                        <a class href = "{{url('/')}}">  <img src="assets/images/nddu-logo.png"></a>
                          <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                  <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn" href="#"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
    
                  <!-- Logout    -->
                  <li class="nav-item"><a class="nav-link text-white" href="{{ route('login')}}" method="POST"> <span class="d-none d-sm-inline">Logout</span>
                      <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                        <use xlink:href="#security-1"> </use>
                      </svg></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>   
    </div>
    @yield('content')
          <!-- Page Footer-->
          
          <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
            <div class="container-fluid">
              <div class="row gy-2">
                <div class="col-sm-6 text-sm-start">
                  <p class="mb-0">Design by <a href="https://bootstrapious.com/p/admin-template" class="text-white text-decoration-none">CS Students</a></p>
                </div>
                <div class="col-sm-6 text-sm-end">
                  <p class="mb-0">Copyright &copy; 2022</p>
                </div>
              </div>
            </div>
          </footer> 
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
</body>
</html>  