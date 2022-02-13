@extends('layouts.dashboard-layout')

@section('content')

<style>
    td{
        width:130px;
        text-align:center;
    }
    th{
        width:130px;
        text-align:center;
    }
</style>

    <h1>User Accounts</h1>
    <table border="2">
        <tr>
            <th>No </th>
            <th>Name  </th>
            <th>Occupation</th>
            <th>Date</th>
            <th>Type of Vaccine</th>
            <th>Dose </th>
        </tr>
        @foreach ($accounts as $account)
        <tr>
            <td>{{ $account->no }}</td>
            <td>{{ $account->name}}</td>
            <td>{{ $account->occupation }}</td>
            <td>{{ $account->date}}</td>
            <td>{{ $account->type_of_vaccine}}</td>
            <td>{{ $account->dose}}</td>
            
            <td>
            <a href="edit-admin/{{ $account->id }}" class= "btn btn-success">Edit</a>
            </td>
        </tr>    
        @endforeach        
    </table>

    <a href="{{url('admin-form')}}" class="btn btn-primary">Add Record</a>
    <a href="{{url('admin-form')}}" class="btn btn-primary">Delete Record</a>
@endsection