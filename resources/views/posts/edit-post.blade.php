@extends('layouts.master')
@section('content')

    <div class="container col-lg-offset-2">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Edit Post</h1>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="/posts/{{$post->id}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="body" id="body" >{{$post->body}}</textarea>
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