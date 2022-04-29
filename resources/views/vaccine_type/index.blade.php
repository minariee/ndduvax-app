@extends('layouts.dashboard-layout')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="mt-1">Vaccine Brand</h1> 
           <a class="btn btn-primary mt-5 mb-2" href="{{ route('vaccine-types.create') }}" style="background-color:#012b09;border:none;">
            Add Vaccine Brand
          </a>
          <table class="table">
            <thead class="table-light">
              <tr>
                  <td>Type of Vaccine</td>
                  <td>Brand Name</td>
                  <td>Actions</td>
              </tr>
            </thead>
            <tbody>
             @foreach ($vaccines as $vaccine)
              <tr>
                  <td>{{ $vaccine->type_name }}</td>
                  <td>{{ $vaccine->brand_name }}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-warning" href="{{ route('vaccine-types.edit', ['vaccine_type' => $vaccine->id ]) }}">Edit</a>
                      <form action="{{route('vaccine-types.delete', ['vaccine_type' => $vaccine->id ] )}}" method="POST">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    
                    </div>
                  </td>
              </tr>    
              @endforeach
            </tbody>
             
          </table>
        </div>
      </div>
    </div>
@endsection