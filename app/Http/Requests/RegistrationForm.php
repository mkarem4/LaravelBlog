<?php

namespace App\Http\Requests;

use App\User;
use App\Mail\welcome;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Mail;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ];
    }

    public function presist()
    {
        /* create and save user */
        $user = User::create(
          $this->only(['name','email','password'])
        );

        /* sign in */
        auth()->login($user);

        /* send welcome mail to user */

        Mail::to($user)->send(new welcome($user));
    }
}
