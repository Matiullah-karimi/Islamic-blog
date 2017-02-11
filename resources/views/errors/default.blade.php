@extends('layouts.master')
<title>PROMOTE - Page Not Found}</title>
@section('page_specific_styles')
    <link rel="stylesheet" href="{{ elixir('main/css/static_pages.css') }}">
@stop
@section('content')
    @include('pages.includes._navbar')
    <div class="container">
        <div class="page">
            <div class="main-title">
                <h2>Oops! Unknown Error</h2>
            </div>
        </div>
    </div>
@stop