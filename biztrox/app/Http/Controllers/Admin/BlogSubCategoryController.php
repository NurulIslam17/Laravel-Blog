<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\BlodSubCategory;

class BlogSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return BlodSubCategory::latest()->with('blogCategory')->get();

        return view('admin.blog.sub-category.index',[
            'sub_category' => BlodSubCategory::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.sub-category.create',
        [
            'categories'  =>BlogCategory::where('status',1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BlodSubCategory::saveOrUpdate($request);
        return back()->with('success','New Blog Sub Category Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        return  $id;

        return view('admin.blog.sub-category.edit',[
            'blogSubCategories' => BlodSubCategory::find($id),
            'blogCategories'  => BlogCategory::where('status',1)->get(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        BlodSubCategory::saveOrUpdate($request,$id);
        return redirect('/blog-sub-categories')->with('success','Blog Sub Category Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlodSubCategory::find($id)->delete();
        return back()->with('success','Blog Sub Category Deleted Successfully.');
    }
}
