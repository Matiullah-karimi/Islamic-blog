@extends('layouts.master')
@section('content')

    <a href="{{url('users/create')}}" >Create new User</a>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
        </thead>

        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>

    @endsection