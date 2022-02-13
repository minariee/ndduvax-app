@extends('layouts.dashboard-layout')

@section('content')
    <h1>User Accounts</h1>
    <table border="2">
        <tr>
            <td>No </td>
            <td>Name</td>
            <td>Occupation </td>
            <td>Date </td>
            <td>Type of Vaccine </td>
            <td>Dose </td>
        </tr>
        @foreach ($accounts as $account)
        <tr>
            <td>{{ $account->no }}</td>
            <td>{{ $account->name}}</td>
            <td>{{ $account->occupation }}</td>
            <td>{{ $account->date}}</td>
            <td>{{ $account->type_of_vaccine}}</td>
            <td>{{ $account->dose}}</td>
        </tr>    
        @endforeach        
    </table>

    <input type="submit" value="Add Record">
@endsection