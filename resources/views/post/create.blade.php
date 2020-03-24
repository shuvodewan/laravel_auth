@extends('layout')
@section('title')
Add Post 
@endsection
@section('alert')
@include('alert')
@endsection
@section('main_content')
<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method='POST' action="{{route('store')}}">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control @if($errors->has('title'))is-invalid @endif" placeholder="Title" name='title'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Post</label>
                    <textarea class="textarea @if($errors->has('post'))is-invalid @endif" placeholder="Place some text here" rows="10"
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px;  padding: 10px;" name='post'>
                    </textarea>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

           
            <!-- /.card -->

        
            <!-- /.card -->
            <!-- Horizontal Form -->
          
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
@endsection
@section('extra_js')
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endsection