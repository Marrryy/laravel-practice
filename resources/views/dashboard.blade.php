@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if (count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            
                        <tr>
                            <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td>
                                {!!Form::open([ "action"=>["PostsController@destroy", $post->id], "method"=>"POST"]) !!}
                                {{ Form::hidden('_method', 'DELETE')}}
                                {{ Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    @else
                    <p>There is no Post</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
