@extends('admin.master')
@section('title')
    Add Blog
@endsection

@section('content')
    <h5 class="text-center"> Edit Blog</h5>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card border border-dark shadow">
                <div class="card-body">
                    <p class="text-center">{{Session('insert')}}</p>

                    <form action="{{route('blogs.update',$blogs->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Category name</label>
                            <div class="col-sm-8">
                                <select name="blog_category_id" class="form-control">
                                    <option  disabled selected> Select Category </option>
                                    @foreach($blogsCategories as $blogCategory)
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
                                    @foreach($blogsSubCategories as $blogSubCategorie)
                                        <option value="{{$blogs->blog_category_id}}" {{$blogs->blog_category_id == $blogsCategories->id ? 'selected':''}} > {{$blogsCategories->sub_category_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-4 col-form-label">Blog Title</label>
                            <div class="col-sm-8">
                                <input type="text" name="blog_title" value="{{$blogs->id}}" class="form-control" id="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-4 col-form-label">Posted By</label>
                            <div class="col-sm-8">
                                <input type="text" name="poster_id" value="{{$user->name}}" class="form-control" id="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <input type="radio" name="status" value="1" {{$blogs->status = "1"?'checked':''}}  id="horizontal-firstname-input">Published
                                <input type="radio" name="status" value="0" {{$blogs->status = "0"?'checked':''}}  id="horizontal-firstname-input">Unpublished
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Slug</label>
                            <div class="col-sm-8">
                                <input type="text" name="slug" value="{{$blogs->slug }}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                                <textarea name="blog_description" class="form-control" cols="30" rows="10">
                                    {{$blogs->blog_description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-sm-4 col-form-label">Featured Image</label>
                            <div class="col-sm-4">
                                <input type="file" name="blog_image" accept="image/*">
                            </div>
                            <div class="col-sm-4">
                                <img src="{{asset($blogs->blog_image)}}" style="height: 100px;width: 100px" alt="">
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
