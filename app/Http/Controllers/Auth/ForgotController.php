<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ForgotRequest;
use App\Http\Services\MailService;
use App\User;
use System\Session\Session;

class ForgotController{

    private $redirectTo = '/home';

    public function view()
    {
        return view('auth.forgot');
    }
    
    public function forgot()
    {

    }

}