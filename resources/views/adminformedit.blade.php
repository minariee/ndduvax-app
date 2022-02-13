@extends('layouts.dashboard-layout')

@section('content')
    <h1>Vaccine Form</h1>
    <form method="POST" action="{{url('update-account/'.$account->id)}}">
        @csrf
        @method('PUT')
        <table border="2">
        <tr>
        <td>Name: <input name="name" value="{{$account->name}}" type="text"><br></td>
        <td>Occupation: <input name="occupation" value="{{$account->occupation}}" type="text"><br></td>
        <td>Date: <input name="date" value="{{$account->date}}" type="date"><br></td>
        <td>Type of Vaccine: <input name="type_of_vaccine" value="{{$account->type_of_vaccine}}" type="text"><br></td>
        <td>Dose: <input name="dose" value="{{$account->dose}}" type="text"><br></td>
        </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
@endsection