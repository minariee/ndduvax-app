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

</style>

<div class="student-profile py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
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
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent text-center">

              <img src="{{ is_null($user->avatar)?'/uploads/avatars/default.jpg': route('avatar', ['user' => $user->id ]) }}" style="width:180px; height:150px; border-radius:50%;">
              <div class="container">
                <form enctype="multipart/form-data" method="POST" action="{{ route('update-avatar', ['user' => $user->id ]) }}" style="margin-top:30px">
                  @method('PUT')
                  @csrf
                  <input type="file" name="avatar">
                  <input type="submit" class="pull-right btn btn-sm btn-primary" value="Update profile image">
                </form>
              </div>
                <h3 style="margin-top:30px">{{ $account->name}}</h3>
            </div>
            <!-- todo add these fields -->
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">Patient ID:</strong> &nbsp; {{ str_pad($account->id, 10, 0, STR_PAD_LEFT) }}</p>
              <p class="mb-0"><strong class="pr-1">Gender: </strong>&nbsp; {{ ucfirst($user->gender) }}</p>
              <p class="mb-0"><strong class="pr-1">Mobile Numer: </strong>{{ $user->mobile_number }}</p>
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
                  <td>{{ $account->name }}</td>
                </tr>
                <tr>
                  <th width="30%">Occupation</th>
                  <td width="2%">:</td>
                  <td>{{ strtoupper($account->occupation) }}</td>
                </tr>
                <tr>
                  <th width="30%">Date Taken</th>
                  <td width="2%">:</td>
                  <td>{{ is_null($account->vaccines()->first()) ? 'N/A': $account->vaccines()->first()->latest_dosage_date }}</td>
                </tr>
                <tr>
                  <th width="30%">Type of Vaccine</th>
                  <td width="2%">:</td>
                  <td>{{ is_null($account->vaccines()->first()) ? 'N/A': $latest->vaccine_type }}</td>
                </tr>
                <tr>
                  <th width="30%">Dose</th>
                  <td width="2%">:</td>
                  <td>{{ is_null($account->vaccines()->first()) ? 'N/A': $latest->current_dose }}</td>
                </tr>
                <tr>
                  <th width="30%">Proof of vaccination</th>
                  <td width="2%">:</td>
                  <td><a target="_blank" href="{{ route('download-proof-of-vaccination', ['account' => $account->id]) }}">View Record</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card shadow-sm">
            <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
              <h3 class="mb-0"><i class="far fa-clone pr-1"></i> Vaccination Information</h3>
              @role('admin')
              <button 
              id="add-record" 
              type="button" 
              class="btn btn-primary"
              data-toggle="modal" data-target="#form-modal"
              >Add Record</button>
              @endrole
            </div>
            <div class="card-body pt-0">
              <table class="table" id="vaccination-table">
                <thead>
                  <tr>
                    <th scope="col">Dosage Date</th>
                    <th scope="col">Vaccine Brand</th>
                    <th scope="col">Dosage</th>
                    <th scope="col">Vaccine Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($vaccines->count() > 0)
                  @foreach($vaccines as $vaccine)
                  <tr>
                    <th scope="row">{{ $vaccine->latest_dosage_date }}</th>
                    <td>{{ $vaccine->vaccine_brand }}</td>
                    <td>{{ $vaccine->current_dose }}</td>
                    <td>{{ $vaccine->vaccine_type }}</td>
                    <td>
                      <form action="{{ route('delete-vax', ['vaccine' => $vaccine->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <th colspan="5">No record found.</th>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="form-modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Vaccination Record Form</h5>
        <button type="button" class="modal-close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-info" role="alert">
        Cannot find the vaccine brand your looking for? you can add one in our <a href="#">Vaccine Manager</a>.
      </div>
        <form action="{{ route('add-vax', ['account' => $account->id]) }}" method="POST" id="add-vax-form">
          @csrf
          <div class="form-group row mb-1">
            <label for="inputDate" class="col-sm-5 col-form-label">Dosage Date</label>
            <div class="col-sm-7">
              <input name="latest_dosage_date" type="date" class="form-control" id="inputDate" required />
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="inputBrand" class="col-sm-5 col-form-label">Vaccine Brand</label>
            <div class="col-sm-7">
              <select id="inputBrand" class="form-control" name="vaccine_brand" value="{{ $vaccine_brands->first()->brand_name }}" required>
                @foreach($vaccine_brands as $vaccine_brand)
                <option value="{{ $vaccine_brand->brand_name }}">{{ $vaccine_brand->brand_name }}</option>
                @endforeach
              </select>
              <!-- <input name="vaccine_brand" type="input" class="form-control" id="inputBrand" required /> -->
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="inputDosage" class="col-sm-5 col-form-label">Dosage</label>
            <div class="col-sm-7">
              <input name="current_dose" type="input" class="form-control" id="inputDosage" required />
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="inputType" class="col-sm-5 col-form-label">Vaccine Type</label>
            <div class="col-sm-7">
              <input name="vaccine_type" type="input" class="form-control" id="inputType" required />
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary modal-close">Close</button>
        <button id="save-add" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <script>
    $(function() {
      $('.modal-close').click(function() {
        location.reload()
      })
      $('#add-record').click(function (e) {
        e.preventDefault()
        $('#form-modal').modal('toggle')
      })
      $('#save-add').click(function() {
        $('#add-vax-form').submit()
      })
    })
  </script>
@endsection