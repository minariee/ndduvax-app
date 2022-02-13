@extends('layouts.dashboard-layout')

@section('content')
    <h1>Vaccine Form</h1>
    <form method="POST" action="/admin-form">
        @csrf
        Name: <input name="name" type="text"><br>
        Occupation: <input name="occupation" type="text"><br>
        Date: <input name="date" type="date"><br>
        Type of Vaccine: <input name="type_of_vaccine" type="text"><br>
        Dose: <input name="dose" type="text"><br>
        <input type="submit" value="Submit">
    </form>
@endsection