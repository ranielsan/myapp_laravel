@extends('layouts.master')

@section('content')
  <h1> Update a Post</h1>
  <hr>
  <form method="POST" action="{{ route('update')}}">
    {{ csrf_field() }}

    <div class="form-group">
      <input type="hidden" name="id" value="{{ $post->id }}">

      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
    </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" name="body" class="form-control">{{ $post->body }}</textarea>
  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Update</button>
</div>
  
   
  @include('layouts.errors')
</form>

@endsection
