@extends('layouts.dashboard-layout')

@section('content')
  <div class="container">
      {{--<center><h1>User Accounts</h1></center>--}}
    <table style ="border:2px solid black;margin-right:auto;margin-left:auto;">
        <tr>

            <th>Name  </th>
            <th>Occupation</th>
            <th>Date</th>
            <th>Type of Vaccine</th>
            <th>Dose </th>
        </tr>
        @foreach ($accounts as $account)
        <tr>

            <td>{{ $account->name}}</td>
            <td>{{ $account->occupation }}</td>
            <td>{{ $account->date}}</td>
            <td>{{ $account->type_of_vaccine}}</td>
            <td>{{ $account->dose}}</td>
            
            <td>
            <a href="edit-admin/{{ $account->id }}" class= "btn btn-success">Edit</a>
            </td>
            
            <td>
                <form action="{{url('delete-admin/'.$account->id)  }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach        
    </table>
    <br><center><a href="{{url('admin-form')}}" class="btn btn-primary">Add Record</a></center>
  </div>
@endsection