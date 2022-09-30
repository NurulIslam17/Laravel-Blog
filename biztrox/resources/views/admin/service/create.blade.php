@extends('admin.master')

@section('title')
    Crearte service
@endsection

@section('content')
    <div class="row">

        <div class="col-lg-9 mx-auto">
            <h4 class="text-center">Crearte Service</h4>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add new Service</h4>
                    <form action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Service Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="service_title" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Service Status</label>
                            <div class="col-sm-9">
                                <input type="radio" value="1" name="status"> Published
                                <input type="radio" value="0" name="status"> Unpublished
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="service_image"  id="horizontal-password-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label mx-auto">Service Description</label>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-sm-12 mx-auto">
                                <textarea name="service_description" style="height:200px" class="form-control" id="summernote" cols="30" rows="10"></textarea>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-warning text-dark rounded-0 w-md">Create Service</button>
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

