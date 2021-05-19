@extends('admin.layouts.master')

@section('content')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" action="{{route('category.add')}}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Category</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
            </div>
           
            
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">is active</label>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
  </div>
@endsection
