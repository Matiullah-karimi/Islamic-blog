@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h3>Reset Password</h3>
                <form method="POST" action="{{ url('/auth/forgot/password') }}" accept-charset="UTF-8">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control" required="required" placeholder="Enter your email here" name="email" type="text">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-send"></i> Send</button>
                        <span style="float:right; margin-top: 5px;"><a href="{{ url('auth/login') }}"><i class="fa fa-sign-in"></i> Login Here </a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection