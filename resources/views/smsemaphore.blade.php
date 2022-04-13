@extends('layouts.dashboard-layout')

@section('content')
<br>
<br>
    <div class="container-fluid">
        <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="row">
                    <div class="col">
                            <strong>Send SMS message</strong>
                            <div class="card-body">
                                    <form method="POST" action="/sms-semaphore">
                                        @csrf
                                    <div class="form-group">
                                     <textarea class="form-control" name="message" placeholder="Notification Message" rows="3"></textarea>
                                    </div>
                                    <br><center><input type="submit" class="btn btn-success btn-md" value="Send Message"></center>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if(!empty($successMsg))
                    <div class="alert alert-success"> {{ $successMsg }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
@endsection