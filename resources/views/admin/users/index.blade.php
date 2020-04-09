@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_user'))
  <div class="alert alert-success">
  {{session('deleted_user')}}
  </div>
@elseif(Session::has('created_user'))
  <div class="alert alert-success">
  {{session('created_user')}}
  </div>
@elseif(Session::has('updated_user'))
  <div class="alert alert-success">
  {{session('updated_user')}}
  </div>
@endif
    <h1>Users</h1>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Avatar</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Status</th>
        <th>Edit User</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo ? $user->photo->path : 'n/a'}}" /></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name or ''}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td><a href="{{route('admin.user.edit', $user->id)}}">Edit User</a></td>
        </tr>
        @endforeach
    @endif
    </tbody>
  </table>
@endsection