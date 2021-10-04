<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ResetPasswordRequest;
use App\User;

class ResetPasswordController{

    private $redirectTo = '/login';

    public function view($token)
    {
        return view('');
    }
    
    public function resetPassword($token)
    {
        
    }
}