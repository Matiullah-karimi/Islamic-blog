@extends('layouts.master')
<title>PROMOTE - Forbidden Access</title>
@section('page_specific_styles')
    <link rel="stylesheet" href="{{ elixir('main/css/static_pages.css') }}">
@stop
@section('content')
    <div class="container">
        <div class="page">
            <div class="main-title">
                <h2>{{ trans('static_pages.error_403_title') }}</h2>
            </div>
            <div class="main-content">
                <p>{{ trans('static_pages.error_403_desc') }}</p>
            </div>
        </div>
    </div>
@stop