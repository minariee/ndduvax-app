@extends('layouts.dashboard-layout')

@section('content')
<div class="container">
  <div class="row mt-5">
    <div class="col-md-12">
      <h1>Add Vaccine Brand</h1>
      @if(session()->has('status'))
      <div class="alert alert-success">
        <h6>{{ session()->get('status') }}</h6>
      </div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
    <div class="col-md-5">
      <form action="{{ route('vaccine-types.update', ['vaccine_type' => $data->id ]) }}" method="POST">
        @method('patch')
        @csrf
        <div class="form-group row mb-1">
          <label for="brand_name" class="col-sm-5 col-form-label">Vaccine Type</label>
          <div class="col-sm-7">
            <input name="type_name" type="input" class="form-control" id="type_name" value="{{ $data->type_name }}" required />
          </div>
        <div class="form-group row mb-1">
          <label for="brand_name" class="col-sm-5 col-form-label">Vaccine Brand</label>
          <div class="col-sm-7">
            <input name="brand_name" type="input" class="form-control" id="brand_name" value="{{ $data->brand_name }}" required />
          </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Vaccine Type</button>
        <a class="btn btn-warning" href="{{ route('vaccine-types') }}">Go back to vaccine list</a>

      </form>
    </div>
  </div>
</div>
@endsection