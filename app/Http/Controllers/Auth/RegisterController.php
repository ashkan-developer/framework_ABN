<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Services\ImageUpload;
use App\Http\Services\MailService;
use App\User;

class RegisterController{

    private $redirectTo = "/login";

    public function view()
    {
        return view("auth.register");
    }


    public function register()
    {
       
    }


    public function activation($token)
    {

    }


}
