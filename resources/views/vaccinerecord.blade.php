@extends('layouts.dashboard-layout')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Name </th>
                        <th>Occupation</th>
                        <th>Last Date Vaccinated</th>
                        <th>Last Vaccine (Dose #)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account )
                    <tr>
                        <td><a href="/vaccinerecord/{{ $account->id}}">{{ $account->id}}</a></td>
                        <td>{{ $account->name}}</td>
                        <td>{{ $account->occupation }}</td>
                        <td>{{ $account->latestVaccine()->latest_dosage_date}}</td>
                        <td>{{ $account->latestVaccine()->vaccine_brand}} ({{ $account->latestVaccine()->current_dose}})</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- <div class="container">
    <center><h1>User Accounts</h1></center>
<table style ="border:2px solid black;margin-right:auto;margin-left:auto;">
    <tr>
        <th>ID  </th>
        <th>Name  </th>
        <th>Occupation</th>
        <th>Date</th>
        <th>Type of Vaccine</th>
        <th>Dose </th>
    </tr>
    @foreach ($accounts as $account )
    <tr>
        <td><a href="/vaccinerecord/{{ $account->id}}">{{ $account->id}}</a></td>
        <td>{{ $account->name}}</td>
        <td>{{ $account->occupation }}</td>
        <td>{{ $account->date}}</td>
        <td>{{ $account->type_of_vaccine}}</td>
        <td>{{ $account->dose}}</td>
        
        </td>
        
    </tr>    
    @endforeach
    
          
</table>
</div> -->
@endsection