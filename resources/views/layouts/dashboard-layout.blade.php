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
                  <a class="navbar-brand d-flex d-lg-inline-block" href="@role('user') /user-dashboard @else /admin-dashboard @endrole">
                    <div class="navbar-brand d-flex px-4 py-3 d-lg-inline-block">
                      <span>Vaccine </span><strong>Tracking App</strong></div>
                    <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
                    
                  </a>

                  <!-- Toggle Button
                  <a class="menu-btn" id="toggle-btn" href="#">
                    <span></span><span></span><span></span>
                  </a>-->
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
    
                  <!-- Logout    -->
                  <li class="nav-item"><a class="nav-link text-white" href="{{ url('/login')}}" method="POST"> <span class="d-none d-sm-inline">Logout</span>
                      <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                        <use xlink:href="#security-1"> </use>
                      </svg></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>   
    </div>
      <!-- Script -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="text/javascript" href="{{ URL::asset('public/assets/js/front.js') }}"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
          ajax.onload = function(e) {
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
     @yield('content') 
</body>
</html>  