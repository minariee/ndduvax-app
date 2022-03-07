@extends('layouts.dashboard-layout')

@section('content')

<div class="container">
    <center><h1>User Accounts</h1></center>
<table style ="border:2px solid black;margin-right:auto;margin-left:auto;">
    <tr>
        <th>Name  </th>
        <th>Occupation</th>
        <th>Date</th>
        <th>Type of Vaccine</th>
        <th>Dose </th>
    </tr>

    <tr>
        <td>{{ $account->name}}</td>
        <td>{{ $account->occupation }}</td>
        <td>{{ $account->date}}</td>
        <td>{{ $account->type_of_vaccine}}</td>
        <td>{{ $account->dose}}</td>
        </td>
        
    </tr>
          
</table>
</div>
@endsection