@extends("layout")
@section('main_content')
<!-- /.row -->
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Responsive Hover Table</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
            </div>
        </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Post</th>
                <th>Date</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($instance as $instance) 
            <tr>
                <td>{{$instance->id}}</td>
                <td>{{$instance->title}}</td>
                <td>{{$instance->post}}</td>
                <td>{{$instance->created_at}}</td>
                <td><a href="{{route('post_edit',$instance->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
</div>
    <!-- /.card -->
@endsection