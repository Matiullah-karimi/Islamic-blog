@extends('layouts.master')

@section('carousel')
    @include('partials.carousel')
@endsection
@section('content')
        @foreach($posts as $post)
            <div class="panel panel-default margin">
                <div class="panel-heading bg-primary">
                    <h1>{{$post->title}}</h1>
                </div>
                <div class="panel-body">
                    <p>
                        {{$post->body}}
                    </p>
                </div>
            </div>

        @endforeach
    @endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection