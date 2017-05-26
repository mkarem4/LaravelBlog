@extends('layouts.layout')
@section('content')

  <div class="col-sm-8 blog-main">
    <h1>Sign Up</h1>
    <form method="post" action="/register">

      {{ csrf_field() }}


        @include('layouts.errors')


      <fieldset class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
      </fieldset>

      <fieldset class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required>
      </fieldset>

      <fieldset class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
      </fieldset>

      <fieldset class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation" required>
      </fieldset>

      <fieldset class="form-group">
      <button type="submit" class="btn btn-primary">Register</button>
      </fieldset>

    </form>
  </div>


@endsection
