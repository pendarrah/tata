<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fNameRegister' => ['required', 'string', 'max:255'],
            'lNameRegister' => ['required', 'string', 'max:255'],
            'nationalCodeRegister' => ['required', 'numeric', 'digits:10'],
            'companyNameRegister' => ['required', 'string', 'max:255'],
            'mobileRegister' => ['required', 'numeric', 'digits:11'],
            'sectorRegister' => ['required', 'string', 'max:255'],
            'emailRegister' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'passwordRegister' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required|same:password|min:6']

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fName' => $data['fNameRegister'],
            'lName' => $data['lNameRegister'],
            'nationalCode' => $data['nationalCodeRegister'],
            'companyName' => $data['companyNameRegister'],
            'mobile' => $data['mobileRegister'],
            'sector' => $data['sectorRegister'],
            'email' => $data['emailRegister'],
            'password' => Hash::make($data['passwordRegister']),
        ]);
    }
}
