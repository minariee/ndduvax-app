@extends('layouts.dashboard-layout')

<style>
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=date]{
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}

/* Overwrite default styles of hr */
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.button {
background-color: #006400;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}

.addbutton:hover {
opacity:1;
}
  </style>

@section('content')
    <h1>Edit Vaccine Form</h1>
    <form method="POST" action="{{url('update-account/'.$account->id)}}">
        @csrf
        @method('PUT')
        <hr>
        <label for="name"><b>Name</b></label>
        <input type="text"  input name="name" value="{{$account -> name}}">

        <label for="occupation"><b>Occupation</b></label>
        <input type="text" input name="occupation" value="{{$account->occupation}}">

        <label for="date"><b>Date</b></label>
        <input type="date" input name="date" value="{{$account->date}}">

        <label for="type_of_vaccine"><b>Type of Vaccine</b></label>
        <input type="text" input name="type_of_vaccine" value="{{$account->type_of_vaccine}}">

        <label for="dose"><b>Dose</b></label>
        <input type="text" input name="dose" value="{{$account->dose}}">
        </hr>

        <button type="submit" class="button">Edit Record</button>
    </form>
@endsection