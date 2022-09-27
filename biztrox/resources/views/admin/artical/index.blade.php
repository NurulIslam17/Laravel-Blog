@extends('admin.master')
@section('title')
    Manage Artical
@endsection

@section('content')
    <div class="row" style="background-color: #a8afa8;padding-top:25px;">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body border border-dark">
                    <h4 class="card-title text-center">Mange Artical </h4>
                    <p>{{Session('delete')}}</p>
                    <p class="text-center">{{Session('update')}}</p>
                    <hr/>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="bg-warning">
                            <th>Serial</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($articales as $articale)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ substr($articale->artical_title,0,35)}}...</td>
                                <td>{{ substr($articale->blog_description,0,35)}}...</td>
                                <td>{{ $articale->status =='1' ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <img src="{{asset($articale->artical_image)}}" style="height: 50px;width: 50px">
                                </td>

                                <td class="text-center">

                                    <a href="{{route('articals.edit',$articale->id)}}" class="btn btn-success rounded-0 text-light"> <i class="bx bx-edit"></i> </a>
                                    <form action="{{route('articals.destroy',$articale->id)}}" class="d-inline" onclick="return confirm('Are you sure ?')" method="post">
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


