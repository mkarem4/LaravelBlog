<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;



class RegisterationController extends Controller
{
  public function create()
  {
    return view ('registration.create');
  }

  public function store(RegistrationForm $form)
  {

    $form->presist();

    session()->flash('message','Thank you for signing up');
    /* redirect to home */
    return redirect()->home();
  }
}
