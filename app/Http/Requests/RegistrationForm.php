<?php

namespace App\Http\Requests;
use App\User;
use App\Mail\WelcomeAgain;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Http\FormRequest;

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
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];
    }
    public function persist()
    {
        //$this->name, $this->email and bcrypt($this->password)
        $user = User::create([ 
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
      ]);
        
        auth()->login($user);

      //Mail::to($user)->send(new Welcome($user));
        Mail::to($user)->send(new WelcomeAgain($user));
    }
}
