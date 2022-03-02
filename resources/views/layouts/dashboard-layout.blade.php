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
        <header class="header z-index-50">
          <nav class="navbar px-0 shadow-sm text-white position-relative">
            <div class="container-fluid w-100">
              <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
                <!-- Navbar Header-->
                <div class="navbar-header">
                  <!-- Navbar Brand -->
                  <a class="navbar-brand d-none d-sm-inline-block" href = "#">  <img src="assets/images/nddu-logo.png">
                          <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong>
                          </div>
                  </a>
                  <!-- Toggle Button-->
                  <a class="menu-btn active" id="toggle-btn" href="#">
                    <span></span><span></span><span></span>
                  </a>
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
     <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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