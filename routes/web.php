<?php

use System\Router\Web\Route;

//home
Route::get('/', 'HomeController@index', 'home.index');

//admin routes 
Route::get('/admin', 'Admin\AdminController@index', 'admin.index');

//category routes
Route::get('/admin/category', 'Admin\CategoryController@index', 'admin.category.index');

//user routes
Route::get('/admin/user', 'Admin\UserController@index', 'admin.user.index');

//auth routes
Route::get('/login', 'Auth\LoginController@view', 'auth.login.view');


