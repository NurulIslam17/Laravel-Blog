@extends('admin.master')
@section('title')
    Manage Blog
@endsection

@section('content')
    <div class="row" style="background-color: #a8afa8;padding-top:25px;">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body border border-dark">
                    <h4 class="card-title text-center">Mange Blog </h4>
                    <p>{{Session('delete')}}</p>
                    <hr/>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="bg-warning">
                            <th>Serial</th>
                            <th>Blog Title</th>
                            <th>Blog Description</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($blogs as $val)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ substr($val->blog_title,0,35)}}...</td>
                                <td>{{ substr($val->blog_description,0,35)}}...</td>
                                <td>{{ $val->status =='1' ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <img src="{{asset($val->blog_image)}}" style="height: 50px;width: 50px">
                                </td>

                                <td class="text-center">
                                    <form action="{{route('blogs.destroy',$val->id)}}" class="d-inline" onclick="return confirm('Are you sure ?')" method="post">
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

