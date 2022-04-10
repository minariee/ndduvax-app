@extends('layouts.dashboard-layout')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="mt-1">Vaccine Brand</h1> 
           <button class="btn btn-primary mt-5 mb-2">
            Add Vaccine Brand
          </button>
          <table class="table">
            <thead class="table-light">
              <tr>
                  <td>Brand name</td>
              </tr>
            </thead>
            <tbody>
             @foreach ($vaccines as $vaccine)
              <tr>
                  <td>{{ $vaccine->vaccine_brand }}</td>
              </tr>    
              @endforeach
            </tbody>
             
          </table>
        </div>
      </div>
    </div>
@endsection