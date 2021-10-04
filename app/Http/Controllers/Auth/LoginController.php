<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\LoginRequest;
use App\User;
use System\Auth\Auth;

class LoginController{

    private $redirectTo = "/home";
    private $redirectToAdmin = "/admin";

    public function view()
    {
        return view("auth.login");
    }


    public function login()
    {
      
    }


}
