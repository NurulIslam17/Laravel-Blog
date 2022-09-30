@extends('admin.master')
@section('title')
    Manage Service
@endsection

@section('content')
    <div class="row" style="background-color: #a8afa8;padding-top:25px;">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-body border border-dark">
                    <h4 class="card-title text-center">Mange Service </h4>
                    <p>{{Session('msg')}}</p>
                    <hr/>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="bg-warning">
                            <th>Serial</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{asset($service->service_image)}}" style="height: 50px;width: 50px">
                                </td>
                                <td>{{ substr($service->service_title,0,20)}}...</td>
                                <td>{!! \Illuminate\Support\Str::words($service->service_description,7,'...') !!}</td>
                                <td>{{ $service->status =='1' ? 'Published' : 'Unpublished' }}</td>


                                <td class="text-center">
                                    <a href="{{route('services.edit',$service->id)}}" class="btn btn-success rounded-0 text-light"> <i class="bx bx-edit"></i> </a>
                                    <form action="{{route('services.destroy',$service->id)}}" class="d-inline" onclick="return confirm('Are you sure ?')" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


