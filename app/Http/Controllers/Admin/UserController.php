<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Services\ImageUpload;
use System\Auth\Auth;



class UserController extends AdminController
{

    public function index()
    {
        return view('admin.user.index');
    }

    public function edit($id)
    {
        return view('');
    }


}