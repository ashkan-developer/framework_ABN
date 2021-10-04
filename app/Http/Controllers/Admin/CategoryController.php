<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\Admin\CategoryRequest;


class CategoryController extends AdminController{

    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('');
    }

    public function store()
    {
  
    }

    public function edit($id)
    {
      
    }

    public function update($id)
    {
   
    }

    public function destroy($id)
    {
      Category::delete($id);
      return back();
    }

}
