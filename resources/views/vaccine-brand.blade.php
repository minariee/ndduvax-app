@extends('layouts.dashboard-layout')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="mt-1">Vaccine Brand</h1> 
           <button class="btn btn-primary mt-5 mb-2" style="background-color:#012b09;border:none;">
            Add Vaccine Brand
          </button>
          <table class="table">
            <thead class="table-light">
              <tr>
                  <td>BRAND NAME</td>
              </tr>
            </thead>
            <tbody>
             @foreach ($vaccines as $vaccine)
              <tr>
                  <td>{{ $vaccine->brand_name }}</td>
              </tr>    
              @endforeach
            </tbody>
             
          </table>
        </div>
      </div>
    </div>
@endsection