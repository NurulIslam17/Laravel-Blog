<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{

    public  $category;

    public function addCategory()
    {
        return view('admin.blog.category.add-category');
    }

    public function newNategory(Request $request)
    {
        BlogCategory::saveBlogCategory($request);
        return back()->with('success','New Blog Category Created Successfully...');
    }


    public function manageCategory()
    {
        $this->category = BlogCategory::latest()->get();
        return view('admin.blog.category.manage-category',[
            'allCategory' => $this->category
        ]);
    }
    public  function deleteCategory($id)
    {
        BlogCategory::find($id)->delete();
        return back()->with('success',' Blog Category Deleted Successfully...');
    }

    public  function editCategory($id)
    {

        return view('admin.blog.category.edit-category',[
            'category' => BlogCategory::find($id),
            'categoryAll' => BlogCategory::all()
        ]);
    }

    public  function updateCategory(Request $request, $id)
    {
       BlogCategory::updateCate($request,$id);
        return redirect('/manage-category')->with('success',' Blog Category Updated Successfully...');

    }


}
