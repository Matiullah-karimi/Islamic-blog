@extends('layouts.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="/posts/create" class="btn btn-success">Create Post</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table stripped">
                <th>Title</th>
                <th colspan="2">Actions</th>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td> <a href="{{url('posts/'.$post->id.'/edit')}}"  value="Edit" class="btn btn-info btn-group-sm">Edit</a></td>

                        <td>
                            <a href="javascript:void(0)" id="{{ $post->id }}" class="btn btn-danger delete" onclick="confirm(this.id);">
                                Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@include('deleteConfirmationModal')

<script>
    function confirm(id){
        $('#confirmDelete').modal('show');
        <!-- Form confirm (yes/ok) handler, submits form -->
        $('.confirm').click(function(){
            var url = '{{url('posts/destroy')}}/'+id;
            $('a.delete').attr('href', url);
        });
    };
</script>