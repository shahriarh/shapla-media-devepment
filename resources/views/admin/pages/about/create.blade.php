@extends('admin.layouts.master')

@section('content')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add About Information</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" action="{{route('about.add')}}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Metadescription</label>
              <input type="text" name="metadescription" class="form-control" id="exampleInputEmail1" placeholder="Enter Metadescription">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea class="form-control" rows="3" name="description" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 92px;"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Meta Title</label>
              <input type="text" name="meta_title" class="form-control" id="exampleInputEmail1" placeholder="Enter Meta Title">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Message</label>
              <textarea class="form-control" rows="3" name="message" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 92px;"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Mission</label>
              <textarea class="form-control" rows="3" name="mission" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 92px;"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Vision</label>
              <textarea class="form-control" rows="3" name="vision" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 92px;"></textarea>
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
