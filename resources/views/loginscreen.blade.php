@extends('layouts.main-bootstrap')

@section('content')
<div class="text-center mt-5">
  <form style="max-width:380px;margin:auto;">     

  <form>
    <img class="mt-4 mb-4" src="https://upload.wikimedia.org/wikipedia/en/d/d9/NDDUseal.png" class="png" height="120" alt="NDDU Logo">
    <h1 class="h3 mb-3 font-weight-normal">NDDU-VAX SIGN IN</h1>
    
    
    
    <input type="email" id="emailAddress"
    class="form-control" placeholder="Email Address">
    

    <input type="password" id="password"
    placeholder="Password" class="form-control">

    <div class="mt-3">
      <button class="btn1">Log In</button>
    </div>

  </form>

</form>

</div>

@endsection