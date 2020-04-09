@extends('layouts.admin')

@section('content')

<h1>Create Post</h1>
<div class="row">

{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files' => true]) !!}
<div class="form-group">
  {!! Form::label('title', 'Post Title') !!}
  {!! Form::text('title', null, ['class'=>'form-control']) !!}

<div class="form-group">
  {!! Form::label('category', 'Category') !!}
  {!! Form::select('category', [''=>'Choose Option'] + $categories, null, ['class'=>'form-control']) !!}

</div>
<div class="form-group">
  {!! Form::label('photo_id', 'Post Image') !!}
  {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('body', 'Post Body') !!}
  {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>6]) !!}
</div>
<div class="form-group">
  {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
</div>
<div class="row">

@include('includes.form_error')
</div>  
    

@stop