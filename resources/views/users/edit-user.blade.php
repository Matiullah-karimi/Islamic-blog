@extends('layouts.master')
@section('content')

    <div class="container col-lg-offset-2">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Edit User</h1>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="/users/{{$user->id}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Role</label>
                                <input type="number" name="role" id="role" class="form-control" value="{{$user->role}}">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Update Post">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection