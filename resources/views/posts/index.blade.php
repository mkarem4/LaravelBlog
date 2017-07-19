@extends('layouts.layout')

@section('content')



    <div class="col-sm-8 blog-main">
        @if (! Auth::guest())
            <a href="{{ url('/posts/create') }}">Create Your Post</a>
        @endif
        @foreach ($posts as $post)
            @include('posts.post')
        @endforeach


        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->


@endsection
