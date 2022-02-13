@extends('layouts.dashboard-layout')

@section('content')
    <h1>Vaccine Form</h1>
    <form method="POST" action="/admin-form">
        @csrf
        <table border="2">
        <tr>
        <td>Name: <input name="name" type="text"><br></td>
        <td>Occupation: <input name="occupation" type="text"><br></td>
        <td>Date: <input name="date" type="date"><br></td>
        <td>Type of Vaccine: <input name="type_of_vaccine" type="text"><br></td>
        <td>Dose: <input name="dose" type="text"><br></td>
        </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
@endsection