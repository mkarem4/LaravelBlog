<?php

namespace App\Http\Controllers;

use App\User;

class RegisterationController extends Controller
{
  public function create()
  {
    return view ('registration.create');
  }

  public function store()
  {
    /* validation */
    $this->validate(request(),[
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed'
    ]);

    /* create and save user */
    $user = User::create(request(['name','email','password']));

    /* sign in */
    auth()->login($user);

    /* redirect to home */
    return redirect()->home();
  }
}
