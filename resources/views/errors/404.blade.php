@extends('layouts.master')

@section('title') {{ trans('static_pages.error_404') }} @stop

@section('content')
    <div class="container">
        <div class="page">
            <div class="main-title">
                <h2>{{ trans('static_pages.error_404') }}</h2>
            </div>
            <div class="main-content">
                <p>{{ trans('static_pages.error_404_message') }}</p>
            </div>
        </div>
    </div>
@stop