@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h3>Login</h3>

                @include('errors.error_list')
                {!! displayAlerts() !!}

                <form method="POST" action="{{ url('auth/login') }}" class="" accept-charset="UTF-8"><input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" required="required" class="form-control" placeholder="Email Or User Name" name="email" type="text">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" required="required" class="form-control" autocomplete="off" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <div class="checkbox">
                        <label for="Remember me">
                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-sign-in"></i> Login</button>
                        <span style="float:right; margin-top: 5px;"><a href="{{ url('/auth/forgot/password') }}"><i class="fa fa-lock"></i> Forgot Password </a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>