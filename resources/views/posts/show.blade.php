@extends('layouts.layout')
@section('content')

  <div class="col-sm-8 blog-main">

    <h1>{{ $post->title }}</h1>


    {{ $post->body }}

    <hr>
    <div class="comments">
      <ul class="list-group">
        @foreach ($post->comments as $comment)
          <li class="list-group-item">

            <strong>
                {{ $comment->created_at->diffForHumans()}} : &nbsp;
            </strong>

            {{ $comment->body}}
          </li>
        @endforeach
      </ul>
    </div>

<hr>
    {{-- add comments --}}


    <div class="card">
      <div class="card-block">
        <form method="post" action="/posts/{{ $post->id}}/comments">

          {{ csrf_field() }}

          @include('layouts.errors')
          <div class="form-group">
            <textarea name="body" placeholder="your comment here ..." class="form-control"></textarea>
          </div>


          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
          </div>

        </form>
      </div>
    </div>
    </div>


@endsection
