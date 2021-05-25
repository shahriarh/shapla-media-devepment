@extends('admin.layouts.master')

@section('content')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Movie Image</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" action="{{route('movie.add')}}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="division_id">Select a Category for this Product</label>
                <select class="form-control" name="category_id">
                  <option value="">Please select a Category for the Prouct</option>
                  @foreach ($category as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                  @endforeach
                </select>
          </div>
            
                <!-- textarea -->
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 92px;"></textarea>
            </div>
            <div class="form-group">
                <label>Movie Detail</label>
                <textarea class="form-control" rows="3" name="movie_details" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 92px;"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter Link">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ratings</label>
                <input type="text" name="ratings" class="form-control" id="exampleInputEmail1" placeholder="Enter Link">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Release Date</label>
                <input type="date" name="release_date" class="form-control" id="exampleInputEmail1" placeholder="Enter Link">
            </div>
           
            <div class="form-group">
                {{-- <div class="container ">
                    <div class="col-md-6">1</div>
                    <div class="col-md-6">2</div>
                </div> --}}
              <label for="exampleInputEmail1">Potrait Image</label>
              <input type="file" name="potraitimage" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
              
              <label for="exampleInputEmail1">Landscape Image</label>
              <input type="file" name="landscapeimage" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
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
