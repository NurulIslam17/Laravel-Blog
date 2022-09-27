@extends('admin.master')
@section('title')
    Add Blog
@endsection

@section('content')
    <h5 class="text-center"> Add Blog</h5>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card border border-dark shadow">
                <div class="card-body">
                    <p class="text-center">{{Session('insert')}}</p>

                    <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Category name</label>
                            <div class="col-sm-8">
                                <select name="blog_category_id" class="form-control">
                                    <option  disabled selected> Select Category </option>
                                    @foreach($blogCategories as $blogCategory)
                                        <option value="{{$blogCategory->id}}"> {{$blogCategory->category_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-4 col-form-label">Sub Category name</label>
                            <div class="col-sm-8">
                                <select name="sub_category_id" class="form-control">
                                    <option disabled selected> Select Sub Category </option>
                                    @foreach($blogSubCategories as $blogSubCategorie)
                                        <option value="{{$blogSubCategorie->id}}"> {{$blogSubCategorie->sub_category_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-4 col-form-label">Blog Title</label>
                            <div class="col-sm-8">
                                <input type="text" name="blog_title" class="form-control" id="">
                            </div>
                        </div>

{{--                        <div class="form-group row mb-4">--}}
{{--                            <label for="" class="col-sm-4 col-form-label">Posted By</label>--}}
{{--                            <div class="col-sm-8">--}}
{{--                                <input type="text" name="poster_id" class="form-control" id="">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <input type="radio" name="status" value="1" checked id="horizontal-firstname-input">Published
                                <input type="radio" name="status" value="0"  id="horizontal-firstname-input">Unpublished
                            </div>
                        </div>

{{--                        <div class="form-group row mb-4">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Slug</label>--}}
{{--                            <div class="col-sm-8">--}}
{{--                                <input type="text" name="slug" class="form-control" id="horizontal-firstname-input">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                                <textarea name="blog_description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-sm-4 col-form-label">Featured Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="blog_image" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" value="Create BLog" class="btn btn-success text-dark rounded-0" id="horizontal-password-input">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
