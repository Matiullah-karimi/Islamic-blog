@extends('layouts.master')

@section('carousel')
    @include('partials.carousel')
@endsection
@section('content')
    @if( count($posts) > 0)
        @foreach($posts as $post)
            <div class="panel panel-default margin">
                <div class="panel-heading bg-primary">
                    <h3>{{$post->title}}</h3>
                </div>
                <div class="panel-body">
                    <p>
                        {{$post->body}}
                    </p>
                </div>
            </div>
        @endforeach
        @else
        <div class="panel panel-default margin">
            <div class="panel-body">
                <p>
                    No Post Found
                </p>
            </div>
        </div>
    @endif

    @endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection