@extends('admin.layouts.master')

@section('content')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add banner</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" action="{{route('banner.add')}}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Banner</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
            </div>
           
            
                <!-- textarea -->
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 92px;"></textarea>
            </div>
            <div class="form-group">
                <label>Short Description</label>
                <textarea class="form-control" rows="3" name="short_description" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 92px;"></textarea>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">year</label>
              <input type="date" name="year" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Age Limit</label>
              <input type="text" name="age_limit" class="form-control" id="exampleInputEmail1" placeholder="Enter age limit">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Image</label>
              <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Cinebaz(url)</label>
              <input type="text" name="cinebazurl" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Trailer Button Url</label>
              <input type="text" name="trailler_button_url" class="form-control" id="exampleInputEmail1" placeholder="Enter ">
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
