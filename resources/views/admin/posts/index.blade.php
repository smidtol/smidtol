@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Body</th>
        <th>Posted By</th>
        <th>Posted At</th>
      </tr>
    </thead>
    <tbody>
    @if($posts)
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->category ? $post->category->name : 'N/A'}}</td>
            <td><img height="50" src="{{$post ? $post->photo->path : 'N/A'}}" /></td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post ? $post->user->name : 'N/A' }}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>

        </tr>
        @endforeach
    @endif
    </tbody>
  </table>


@stop