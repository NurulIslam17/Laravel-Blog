@extends('admin.master')

@section('title')
    Edit service
@endsection

@section('content')
    <div class="row">

        <div class="col-lg-9 mx-auto">
            <h4 class="text-center">Edit Service</h4>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Service</h4>
                    <form action="{{ route('services.update',$service->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Service Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="service_title" value="{{$service->service_title}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Service Status</label>
                            <div class="col-sm-9">
                                <input type="radio" value="1" {{ $service->status == '1' ? 'checked':' ' }} name="status"> Published
                                <input type="radio" value="0" {{ $service->status == '0' ? 'checked':' ' }} name="status"> Unpublished
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-4">
                                <input type="file" name="service_image" id="horizontal-password-input">
                            </div>
                            <div class="col-sm-4">
                                <img src="{{asset($service->service_image)}}" alt="Service_Image" style="height: 100px; width: 100px">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label mx-auto">Service Description</label>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-sm-12 mx-auto">
                                <textarea name="service_description" style="height:200px" class="form-control" id="summernote" cols="30" rows="10">
                                    {{$service->service_description}}
                                </textarea>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-warning text-dark rounded-0 w-md">Update Service</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

