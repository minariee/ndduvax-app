@extends('layouts.main-bootstrap')

@section('content')
    <h1>Vaccine Form</h1>
    <form method="POST" action="/vaccine-form">
        @csrf
        Vaccine Type: <input name="vaccine_type" type="text"><br>
        Vaccine Brand: <input name="vaccine_brand" type="text"><br>
        Curent Dose: <input name="current_dose" type="text"><br>
        Latest Dosage: <input name="latest_dosage_date" type="date"><br>
        <input type="submit" value="Submit">
    </form>
@endsection