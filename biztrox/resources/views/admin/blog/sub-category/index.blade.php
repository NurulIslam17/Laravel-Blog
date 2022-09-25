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
                            <th>Sub Category Id</th>
                            <th>Sub Category Name</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($sub_category as $val)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$val->sub_category_id}}</td>
                                    <td>{{$val->sub_category_name}}</td>
                                    <td>{{ $val->status =='1' ? 'Published' : 'Unpublished' }}</td>

                                    <td class="text-center">
                                        <a href="" class="btn btn-success rounded-0 text-light"> Edit </a>
                                        <a href="" onclick="return confirm('Are You Sure ?')" class="btn btn-danger rounded-0 text-light"> Delete </a>
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

