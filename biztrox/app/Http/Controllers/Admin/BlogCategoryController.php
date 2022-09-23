<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.blog.category.add-category');
    }
    public function manageCategory()
    {
        return view('admin.blog.category.manage-category');
    }
}
