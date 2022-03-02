<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap Layout</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/override.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a href = "{{url('/')}}">  <img src="assets/images/nddu.png" class="css-class"></a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href = "{{url('/')}}">NDDU VAX APP</a>
            </div>
            <div class= "col-4" align="right">            
                <a class="btn btn-md btn-outline-success" href="{{url('/login')}}">Login</a>
                <a class="btn btn-md btn-outline-success" href="{{url('/register')}}">Register</a> 
            </div>
          </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-center">
              <a class="p-2 link-secondary" href="{{url('/')}}">Home</a>
              <a class="p-2 link-secondary" href="{{url('/blog')}}">Blog</a>
              <a class="p-2 link-secondary" href="{{url('/privacy-policy')}}">Privacy Policy</a>
            </nav>
          </div>
         
    @yield('content')
    <footer class="blog-footer">
        <p>Copyright © 2022</p>
      </footer>
</body>
</html>