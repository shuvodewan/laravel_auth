@extends("layout")
@section('title')
Member List
@endsection
@section('main_content')
<!-- /.row -->
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Member List</h3>

        <div class="card-tools">
            
            

            
                <a href="{{route('add_member')}}" class="btn btn-primary btn-sm">Add</a>
            
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
                <td>{{$instance->name}}</td>
                <td>{{$instance->email}}</td>
                <td>{{$instance->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
</div>
    <!-- /.card -->
@endsection