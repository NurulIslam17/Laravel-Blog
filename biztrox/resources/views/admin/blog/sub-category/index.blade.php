@extends('admin.master')
@section('title')
    Manage Blod Sub Category
@endsection

@section('content')
    <div class="row" style="background-color: #a8afa8;padding-top:25px;">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-body border border-dark">
                    <h4 class="card-title text-center">Mange Blod Sub Category Table </h4>
                    <hr/>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="bg-warning">
                            <th>Serial</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($sub_category as $val)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$val->blogCategory->category_name}}</td>
                                    <td>{{$val->sub_category_name}}</td>
                                    <td>{{ $val->status =='1' ? 'Published' : 'Unpublished' }}</td>

                                    <td class="text-center">
                                        <a href="{{route('blog-sub-categories.edit',$val->id) }}" class="btn btn-success rounded-0 text-light"> <i class="bx bx-edit"></i> </a>

                                        <form action="{{route('blog-sub-categories.destroy',$val->id)}}" class="d-inline" onclick="return confirm('Are you sure ?')" method="post">
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

