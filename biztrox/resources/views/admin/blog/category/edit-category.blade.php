@extends('admin.master')
@section('title')
    Edit Category
@endsection

@section('content')
    <h1 class="text-center"> Edit Category</h1>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card border border-dark shadow">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Blog Category</h4>
                    <p class="text-center">{{Session('msg')}}</p>

                    <form action="{{route('update.category',['id'=>$category->id])}}" method="post">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Category name</label>
                            <div class="col-sm-8">
                                <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <label>  <input type="radio" name="status" {{ $category->status =="1" ? 'checked' : '' }}  value="1" id="horizontal-email-input"> Published </label>
                                <label>  <input type="radio" name="status" {{ $category->status =="0" ? 'checked' : '' }}  value="0" id="horizontal-email-input"> Unpublished</label>
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" value="Update Blog Category" class="btn btn-success text-dark rounded-0" id="horizontal-password-input">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
