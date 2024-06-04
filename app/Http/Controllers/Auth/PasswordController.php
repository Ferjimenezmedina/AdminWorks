<?php

namespace empleaDos\Http\Controllers\Auth;

use empleaDos\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use empleaDos\Http\Requests\ChangePasswordRequest;
use Auth;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function redirectPath()
    {
        if( Auth::user()->type == 'root'){
            return route('admin.home');
        }elseif (Auth::user()->type == 'company' ) {
            return route('company.index');
        }else{
            return route('frontend.index');
        }
    }
    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $user->password = $password;

        $user->save();

        Auth::login($user);
    }

}
