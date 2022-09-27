@extends('admin.master')
@section('title')
    Edit Artical
@endsection

@section('content')
    <h5 class="text-center"> Edit Artical</h5>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card border border-dark shadow">
                <div class="card-body">
                    <p class="text-center">{{Session('update')}}</p>

                    <form action="{{route('articals.update',$category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-4 col-form-label">Artical Title</label>
                            <div class="col-sm-8">
                                <input type="text" name="artical_title" value="{{$category->artical_title}}" class="form-control" id="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <input type="radio" name="status" value="1" {{$category->status =='1' ? 'checked':''}}  id="horizontal-firstname-input">Published
                                <input type="radio" name="status" value="0" {{$category->status =='0' ? 'checked':''}}  id="horizontal-firstname-input">Unpublished
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                                <textarea name="blog_description" class="form-control" cols="30" rows="10">
                                    {{$category->blog_description}}
                                </textarea>
                            </div>
                        </div>

                        {{--                        <div class="form-group row mb-4">--}}
                        {{--                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Slug</label>--}}
                        {{--                            <div class="col-sm-8">--}}
                        {{--                                <input type="text" name="slug" class="form-control" id="horizontal-firstname-input">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="form-group row mb-4">--}}
                        {{--                            <label for="" class="col-sm-4 col-form-label">Posted By</label>--}}
                        {{--                            <div class="col-sm-8">--}}
                        {{--                                <input type="text" name="poster_id" class="form-control" id="">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}


                        <div class="form-group row mb-4">
                            <label class="col-sm-4 col-form-label">Artical Image</label>
                            <div class="col-sm-4">
                                <input type="file" name="artical_image" accept="image/*">
                            </div>
                            <div class="col-sm-4">
                                <img src="{{asset($category->artical_image)}}"  style="height: 100px;width: 100px" alt="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" value="Update Artical" class="btn btn-success text-dark rounded-0" id="horizontal-password-input">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
