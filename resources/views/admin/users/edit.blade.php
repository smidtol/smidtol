@extends('layouts.admin')

@section('content')
<h1>Edit User</h1>

<h3>Currently editing user: {{$user->name}}<h3>
<h4>Assign a new role:</h4>

<div class="form-group">
  <form method="PATCH" action="admin.users.update">
  <label for="sel1">Select new role:</label>
  <select class="form-control" id="sel1">
  @foreach($roles as $role)
    <option>{{$role->name}}</option>
  @endforeach
  </select>
  {{csrf_field()}}
</div>
<button type="button" method="get" class="btn btn-primary">Submit</button>

</form>

@endsection

@yield('footer')
<script src='/public/js/angular.min.js'></script>
