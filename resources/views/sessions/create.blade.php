@extends('layouts.layout')
@section('content')

  <div class="col-sm-8 blog-main">
    <h1>Sign In</h1>
    <form method="post" action="/login">

      {{ csrf_field() }}


        @include('layouts.errors')

      <fieldset class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required>
      </fieldset>

      <fieldset class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
      </fieldset>


      <fieldset class="form-group">
      <button type="submit" class="btn btn-primary">Sign In</button>
      </fieldset>

    </form>
  </div>


@endsection
