@extends('layouts.main-bootstrap')

@section('content')
    <h1>User Accounts</h1>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Account</td>
            <td>Occupation</td>
            <td>Date</td>
            <td>Type of Vaccine</td>
            <td>Dose</td>
        </tr>
        @foreach ($accounts as $account)
        <tr>
            <td>{{ $account->No. }}</td>
            <td>{{ $account->Acount}}</td>
            <td>{{ $account->Occupation}}</td>
            <td>{{ $account->Date}}</td>
            <td>{{ $account->Type_of_Vaccine}}</td>
            <td>{{ $account->Dose}}</td>
        </tr>    
        @endforeach
        
    </table>
@endsection