@extends('layouts.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="/register" class="btn btn-success">Register User</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table stripped">
                <th>Name</th>
                <th>Email</th>
                <th colspan="2">Actions</th>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td> <a href="{{url('users/'.$user->id.'/edit')}}"  value="Edit" class="btn btn-info btn-group-sm">Edit</a></td>

                        <td>
                            <a href="javascript:void(0)" id="{{ $user->id }}" class="btn btn-danger delete" onclick="confirm(this.id);">
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
            var url = '{{url('users/destroy')}}/'+id;
            $('a.delete').attr('href', url);
        });
    };
</script>