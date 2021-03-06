@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts)>0)
    @foreach ($posts as $post)
      <div class="card p-3 mt-3 mb-3">
<div class="row">
  <div class="col-md-4 col-sm-4">
<img style="width:100%" src="/public/cover_images/{{$post->cover_image}}" alt="pic">
  </div>

<div class="col-md-4 col-sm-4">
        <h3>
          <a href="/posts/{{$post->id}}">
            {{$post->title}}
          </a>
        </h3>
      <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
      </div>        
    @endforeach
  {{$posts->links()}}
  @else
    <p>No posts found</p>
  @endif
</div></div>
@endsection