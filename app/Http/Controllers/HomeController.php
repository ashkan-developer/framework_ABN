<?php

namespace App\Http\Controllers;


use App\Category;
use System\Auth\Auth;
use System\Database\DBBuilder\DBBuilder;

class HomeController extends Controller
{

    public function index(){
       
        return view('');
    }

    public function category($id)
    {
      
        return view('');
    }



}