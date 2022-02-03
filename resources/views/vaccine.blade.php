@extends('layouts.main-bootstrap')

@section('content')
    <h1>Vaccine List</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>brand</td>
            <td>type</td>
        </tr>
        @foreach ($vaccines as $vaccine)
        <tr>
            <td>{{ $vaccine->id }}</td>
            <td>{{ $vaccine->vaccine_brand }}</td>
            <td>{{ $vaccine->vaccine_type }}</td>
        </tr>    
        @endforeach
        
    </table>
@endsection