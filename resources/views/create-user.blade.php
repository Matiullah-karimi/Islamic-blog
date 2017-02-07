@extends('layouts.master')
@section('content')
    <form method="post" action="{{url('users')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input name="name"> <br>
        <input name="email"><br>
        <input type="password" name="password">
        <input type="submit">
    </form>