<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
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
      <!-- Script -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="text/javascript" href="{{ URL::asset('public/assets/js/front.js') }}" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function (e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
          }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');  
      </script>
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="navbar-header z-index-50">
        <nav class="navbar px-0 shadow-sm text-white position-relative">
          <div class="container-fluid  w-100">
            <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
              <!-- Navbar Header-->
              <div class="navbar-brand d-flex d-lg-inline-block">
                <!-- Navbar Brand -->
                <a class="navbar-brand d-flex d-lg-inline-block" href="{{ route('dashboard') }}">
                  <div class="navbar-brand d-flex px-4 py-3 d-lg-inline-block">
                    <span>Vaccine </span><strong>Tracking App</strong>
                  </div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none">
                    <strong>BD</strong>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </nav>
      </header>   
    </div>
    <div class="page-content d-flex align-items-stretch"> 
    <!-- Side Navbar -->
    <nav class="side-navbar z-index-40">
      <div class="content-inner w-100">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center py-4 px-3">
        <img class="avatar shadow-0 img-fluid rounded-circle" src="/assets/images/avatar-3.png" alt="...">
        <div class="ms-3 title">
          <h1 class="h4 mb-2">{{ Auth::user()->account->name }}</h1>
          <p class="text-sm text-gray-500 fw-light mb-0 lh-1">{{ Auth::user()->hasRole('admin') ? 'Admin': 'User'}}</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Menu</span>
      <ul class="list-unstyled py-4">
        <li class="sidebar-item active">
          <a class="sidebar-link" href="{{url('/en/blog')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>
            Dashboard 
          </a>
        </li>
        @role('admin')
        <li class="sidebar-item">
          <a class="sidebar-link" href="/vaccinerecord/">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>
            Patient Records
          </a>
        </li>
        @else
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('my-vaccinerecord') }}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>
            My Vaccine Record
          </a>
        </li>
        @endrole
      </ul>
      @role('admin')
      <span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Admin Management</span>
      <ul class="list-unstyled py-4">
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{url('/admin-table')}}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Admin Management
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{url('/sms-semaphore')}}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Announcements 
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('vaccine-types') }}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Vaccine Type Management 
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#disable-1"> </use>
            </svg>
            Content Management 
          </a>
        </li>
      </ul>
      @endrole
      <ul class="list-unstyled py-4">
        <li class="sidebar-item">
          <form id="form-submit" action="{{ route('logout') }}" method="POST">
            @csrf
            <a class="sidebar-link" id="logout-btn"> 
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                <path d="M7.5 1v7h1V1h-1z"/>
                <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
              </svg>
              Log-out 
            </a>
          </form>
        </li>
      </ul>
    </nav>

    <div class="content-inner w-100">
      <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
          <h2 class="mb-0 p-1">Welcome {{ Auth::user()->account->name }}!</h2>
        </div>
      </header>
      @yield('content') 
        <!-- Page Footer-->
        <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
        <div class="container-fluid">
          <div class="row gy-2">
            <div class="col-sm-6 text-sm-start">
              <p class="mb-0">VAX <a href="#" class="text-white text-decoration-none">TRACKING APP</a>
              </p>
            </div>
            <div class="col-sm-6 text-sm-end">
              <p class="mb-0">Copyright &copy; 2022</p>
            </div>
          </div>
        </div>
      </footer> 
    </div>
    <script>
      $(function() {
        $('#logout-btn').on('click', function() {
          $('#form-submit').submit();
        })
      })
    </script>
  </body>
</html>  