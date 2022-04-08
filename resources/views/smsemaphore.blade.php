@extends('layouts.dashboard-layout')

@section('content')
    <div class="container-fluid">
            <div class="jumbotron">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Add Phone Number
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Enter Phone Number</label>
                 <input type="tel" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                      <button type="submit" class="btn btn-success">Register User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Send SMS message
                            </div>
                            <div class="card-body">
                                    <form method="POST" action="/sms-semaphore">
                                        @csrf
                                        <label>Select users to notify</label>
                                        <select name="users[]" multiple class="form-control">
                                            @foreach ($users as $user)
                                                <option>{{$user->mobile_number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Notification Message</label>
                                     <textarea class="form-control" rows="3"></textarea>
                                    </div>
                 <button type="submit" class="btn btn-success">Send Notification</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection