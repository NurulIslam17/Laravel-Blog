@extends('admin.master')
@section('title')
    Edit Sub Category
@endsection

@section('content')
    <h5 class="text-center"> Edit Sub Category</h5>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card border border-dark shadow">
                <div class="card-body">
                    <h1 class="card-title mb-4">Edit Blog Sub Category </h1>
                    <p class="text-center">{{Session('msg')}}</p>

                    <form action="{{route('blog-sub-categories.update',$blogSubCategories->id)}}" method="post">
                        @csrf
                        @method("put")

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Category name</label>
                            <div class="col-sm-8">
                                <select name="sub_category_id" class="form-control">
                                    @foreach($blogCategories as $blogCategory)
                                        <option value="{{$blogCategory->id}}" {{$blogCategory->id==$blogSubCategories->sub_category_id ? 'selected':''}}> {{ $blogCategory->category_name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Sub Category name</label>
                            <div class="col-sm-8">
                                <input type="text" name="sub_category_name" value="{{$blogSubCategories->sub_category_name}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <label>  <input type="radio" name="status" {{$blogSubCategories->status == '1' ?'checked' : ''}}  value="1"  id="horizontal-email-input"> Published</label>
                                <label>  <input type="radio" name="status" {{$blogSubCategories->status == '0' ?'checked' : ''}}  value="0"  id="horizontal-email-input"> Unublished</label>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" value="Update Sub Blog Category" class="btn btn-success text-dark rounded-0" id="horizontal-password-input">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
