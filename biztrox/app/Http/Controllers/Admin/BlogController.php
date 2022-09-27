<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlodSubCategory;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    private $deleteBlog;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.blogs.index',
        [
            'blogs' => Blog::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.blogs.create',
            [
                'blogCategories' => BlogCategory::where('status',1)->get(),
                'blogSubCategories' =>BlodSubCategory::where('status',1)->get(),
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
       Blog::creteBlog($request);
       return back()->with('insert','Blog Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return  view("admin.blog.blogs.edit",[
            'blogsCategories' => BlogCategory::where('status',1)->get(),
            'blogsSubCategories' => BlodSubCategory::where('status',1)->get(),
            'blogs' =>Blog::find($id),
            "user" => Auth::user(),
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
        Blog::creteBlog($request);
        return back()->with('insert','Blog Created Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->deleteBlog=Blog::find($id);

        if(file_exists($this->deleteBlog->blog_image))
        {
            unlink($this->deleteBlog->blog_image);
        }
        $this->deleteBlog->delete();
        return redirect()->back()->with('delete','Blog Deleted Successfully..');

    }
}
