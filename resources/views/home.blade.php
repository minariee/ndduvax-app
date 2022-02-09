@extends('layouts.main-bootstrap')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Blog Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">    

    <!-- Bootstrap core CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png"> 
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png"> 
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json"> 
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3"> 
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

 <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/blog.css') }}">
  </head>
  
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a href = "{{url('/home-page')}}">  <img src="assets/images/nddu.png" class="css-class"></a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">NDDU VAX APP</a>
      </div>


      
      <img class="mt-4 mb-4" src="https://upload.wikimedia.org/wikipedia/en/d/d9/NDDUseal.png" class="png" height="120" alt="NDDU Logo">



      <div class= "col-4" align="right">
        <a class="btn btn-md btn-outline-success" href="{{url('/login-page')}}">Login</a>
        <a class="btn btn-md btn-outline-success" href="{{url('/registration-page')}}">Register</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-center">
      <a class="p-2 link-secondary" href="{{url('/home-page')}}">Home</a>
      <a class="p-2 link-secondary" href="#">Blog</a>
      <a class="p-2 link-secondary" href="#">Privacy Policy</a>
    </nav>
  </div>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-success">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Philippines: COVID-19 Vaccine Tracker</h1>
      <p class="lead my-3">ABS-CBN News tracks the supply of vaccines arriving in the Philippines, the volume per brand, and the status of their distribution in the regions.</p>
      <p class="lead mb-0"><a href="https://news.abs-cbn.com/spotlight/multimedia/infographic/03/23/21/philippines-covid-19-vaccine-tracker" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">World Health Organization</h3>
          <div class="mb-1 text-muted">8 December 2020</div>
          <p class="card-text mb-auto">This article is part of a series of explainers on vaccine development and distribution. Learn more about vaccines – from how they work and how they’re made to ensuring safety and equitable access.</p>
          <a href="https://www.who.int/news-room/feature-stories/detail/how-do-vaccines-work?adgroupsurvey={adgroupsurvey}&gclid=Cj0KCQiAgP6PBhDmARIsAPWMq6mxOrvw13jAwitFNKx6Qdx5Eij3BHw_TeS-1oKz9OYfymzFbJnwgx0aAr7JEALw_wcB" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="assets/images/vaccine.jpg" svg class="bd-placeholder-img"  width="200" height="250" xmlns="http://www.w3.org/2000/svg" >
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">National</strong>
          <h3 class="mb-0">Updates on COVID-19 Vaccines - DOH</h3>
          <div class="mb-1 text-muted">24 February 2022</div>
          <p class="mb-auto">Let’s realize a COVID-protected Philippines! As more Filipinos are vaccinated, we are a few more steps closer to brighter days in the new normal.</p>
          <a href="https://doh.gov.ph/vaccines" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="assets/images/new.jpg" svg class="bd-placeholder-img"  width="200" height="250" xmlns="http://www.w3.org/2000/svg" >
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        News
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">Philippines reaches 54M fully vaccinated persons almost 2 weeks into 2022</h2>
        <p class="blog-post-meta">Published January 14, 2022 10:13pm by <a href="#">RICHA NORIEGA, GMA News</a></p>

        <p>More than 54 million of the Philippine population have been fully vaccinated against COVID-19 amid the sudden steep increase in cases which started after Christmas, the National Task Force Against COVID-19 said on Friday.</p>
        <hr>
        <p>Data from the National Vaccination Operations Center (NVOC) as of January 13 showed that 54,457,863 individuals have been fully vaccinated or 70.60% of the government's target for vaccination.</p>
        <h2>The Philippines, thus, reached less than a week into 2022 the milestone vaccine czar Secretary Carlito Galvez said the government wanted to reach by the end of 2021.</h2>
        <blockquote class="blockquote">
          <p>Galvez said in a statement.
        </p>
        </blockquote>
        <p>“Malaki ang naging epekto ng Bagyong Odette sa ating pagbabakuna kaya bahagyang naantala ang pag-abot sa target nating 54 million fully vaccinated individuals sa pagtatapos ng 2021,"</p>
        <p>"Sinabayan pa ito ng panibagong surge ngayong Enero, pero hindi tayo tumigil sa pagbabakuna,” he added.</p>
        <a class="btn btn-md btn-outline-success" href="https://www.gmanetwork.com/news/topstories/nation/818225/philippines-reaches-54m-fully-vaccinated-persons-almost-2-weeks-into-2022/story/"> Read More</a>
        <br><br><h3>Other Stories</h3>
        <ul>
          <li><a href="https://www.gmanetwork.com/news/topstories/nation/818220/doh-coming-up-with-system-to-include-antigen-self-test-results-in-covid-19-tally/story/">DOH coming up with system to include antigen self-test results in COVID-19 tally</a></li>
          <li><a href="https://www.gmanetwork.com/news/topstories/nation/818207/unvaccinated-persons-form-long-queues-crowd-vax-sites/story/">Unvaccinated persons form long queues, crowd vax sites</a></li>
          <li><a href="https://www.gmanetwork.com/news/topstories/nation/818170/gov-t-quarantine-facilities-must-provide-isolation-rooms/story/">Gov't: Quarantine facilities must provide isolation rooms</a></li>
        </ul>
        <h2>City Government of Gensan</h2>
        <p>Read your latest News and Announcements here <a href="https://eportal.gensantos.gov.ph/news/">General Santos City</a>.</p>
        <p>TINGNAN | As Of 6:00 PM, Lunes, November 01, 2021, Narito Ang Update Sa Tala Ng Mga Kumpirmadong Kaso Ng COVID-19 Sa Lungsod.</p>
        <a href = "https://eportal.gensantos.gov.ph/news-content/?tkx=258a02ec145bf25ef3d9d456b26d6dd7">  <img src="assets/images/genews.jpg" class="css-class"></a>
        
        <br><br><nav class="nav d-flex justify-content-center">
        <a class="btn btn-md btn-outline-success" href="https://eportal.gensantos.gov.ph/news/"> Read More</a>
        </nav>
     

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About Us</h4>
          <p class="mb-0">This Website offers you vaccine tracker that enable you to see updates and news regarding vaccines. </p>
        </div>

            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic"> <a href = "https://vaxcert.doh.gov.ph/">Get Your Vax Cert</a></h4>
                <p class="mb-0"> <a href = "https://vaxcert.doh.gov.ph/">  <img src="assets/images/m6.png" class="css-class"></a></p>
            </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="https://www.nddu.edu.ph/">NDDU Website</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="https://www.facebook.com/NDDUofficial/">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
  <p>Copyright © 2022</p>
</footer>
    
  </body>
</html>
@endsection