@extends('admin.master')
@section('title')
    Add Category
@endsection

@section('content')
    <h5 class="text-center"> Add Category</h5>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card border border-dark shadow">
                <div class="card-body">
                    <h1 class="card-title mb-4">Add Blog Category </h1>
                    <p class="text-center">{{Session('msg')}}</p>

                    <form action="{{route('new.category')}}" method="post">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Category name</label>
                            <div class="col-sm-8">
                                <input type="text" name="category_name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                               <label>  <input type="radio" name="status"  value="1" checked  id="horizontal-email-input"> Published</label>
                               <label>  <input type="radio" name="status" value="0"  id="horizontal-email-input"> Unublished</label>
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" value="Create Blog Category" class="btn btn-success text-dark rounded-0" id="horizontal-password-input">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
