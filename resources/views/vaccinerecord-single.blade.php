@extends('layouts.dashboard-layout')

@section('content')

<style>
    body {
    background: #67B26F;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
    background: #192a1c; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
}

.student-profile .card {
    border-radius: 10px;
}

.student-profile .card .card-header .profile_img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;
}

.student-profile .card h3 {
    font-size: 20px;
    font-weight: 700;
}

.student-profile .card p {
    font-size: 16px;
    color: #000;
}

.container{
  width:1500%;
}
</style>

<div class="student-profile py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent text-center">

            <img src="{{ is_null($account->profile_url)?'/uploads/avatars/default.jpg':$account->profile_url }}" style="width:180px; height:150px; border-radius:50%;">
            <div class="container">
            <form enctype="multipart/form-data" action="/profile" method="POST" style="margin-top:30px">
            </div>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="pull-right btn btn-sm btn-primary">

              <h3 style="margin-top:30px">{{ $account->name}}</h3>
            </div>
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">Student ID:</strong>321000001</p>
              <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
              <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent border-0">
              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
            </div>
            <div class="card-body pt-0">
              <table class="table table-bordered">
                <tr>
                  <th width="30%">Name</th>
                  <td width="2%">:</td>
                  <td>{{ $account->name}}</td>
                </tr>
                <tr>
                  <th width="30%">Occupation</th>
                  <td width="2%">:</td>
                  <td>{{ $account->occupation}}</td>
                </tr>
                <tr>
                  <th width="30%">Date Taken</th>
                  <td width="2%">:</td>
                  <td>{{ $account->date}}</td>
                </tr>
                <tr>
                  <th width="30%">Type of Vaccine</th>
                  <td width="2%">:</td>
                  <td>{{ $account->type_of_vaccine}}</td>
                </tr>
                <tr>
                  <th width="30%">Dose</th>
                  <td width="2%">:</td>
                  <td>{{ $account->dose}}</td>
                </tr>
              </table>
            </div>
          </div>
            <div style="height: 26px"></div>
          <div class="card shadow-sm">
            <div class="card-header bg-transparent border-0">
              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
            </div>
            <div class="card-body pt-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection