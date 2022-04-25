@extends('layouts.dashboard-layout')

@section('content')

<style>
    a{
        font-size:20px;
    }
</style> 

<br>
<br>
<div class="container">
    <form action="/vaccinerecord" method="POST" role="search">
        @csrf
    <input type="text" name="q" placeholder="search by name or occupation..." />
    <button type="submit"> Search </button>
    </form>
</div>
<br>
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
                        <td><a title="Edit Vaccine Record" href="/vaccinerecord/{{ $account->id}}">{{ $account->id}}</a></td>
                        <td>{{ $account->name}}</td>
                        <td>{{ $account->occupation }}</td>
                        @if( $account->vaccines()->count() < 1 )
                        <td>N/A</td>
                        <td>N/A</td>
                        @else
                        <td>{{ $account->latestVaccine()->latest_dosage_date}}</td>
                        <td>{{ $account->latestVaccine()->vaccine_brand}} ({{ $account->latestVaccine()->current_dose}})</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $accounts->render() !!}
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