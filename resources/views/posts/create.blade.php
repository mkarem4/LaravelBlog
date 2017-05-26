@extends('layouts.layout')
@section('content')
  <div class="col-sm-8 blog-main">
    <h1>Create a Post</h1>
    <hr>
    <form method="post" action="/posts">
      {{ csrf_field() }}

      @include('layouts.errors')

      <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="title">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
          <textarea name="body" id="body" class="form-control"></textarea>
        </div>

      <button type="submit" class="btn btn-primary">Publish</button>
    </form>
  </div>
@endsection
