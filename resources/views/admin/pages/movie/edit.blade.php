@extends('admin.layouts.master')

@section('content')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Movie Image</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" action="" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="required form-control" maxlength="250" @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->name}}" @endif placeholder="Movie Name" />
            </div>
            <div class="form-group">
                <label for="division_id">Select a Category for this Product</label>
                <select class="form-control" name="category_id">
                  <option value="">Please select a Category for the Prouct</option>
                  @foreach ($categories as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                  @endforeach
                </select>
          </div>
            
                <!-- textarea -->
            <div class="form-group">
                <label>Description</label>
                <textarea type="text" name="description" rows="3" class="form-control"  @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->description}}" @endif placeholder="description"></textarea>
            </div>
            <div class="form-group">
                <label>Movie Detail</label>
                <textarea type="text" name="movie-details" rows="3" class="form-control"  @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->movie_details}}" @endif placeholder="movie details"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="link" class="required form-control" maxlength="250" @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->link}}" @endif placeholder="link " />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ratings</label>
                <input type="text" name="ratings" class="required form-control" maxlength="250" @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->ratings}}" @endif placeholder="" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Release Date</label>
                <input type="text" name="release_date" class="required form-control" maxlength="250" @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->release_date}}" @endif placeholder="release date" />
            </div>
           
            <div class="form-group">
                {{-- <div class="container ">
                    <div class="col-md-6">1</div>
                    <div class="col-md-6">2</div>
                </div> --}}
              <label for="exampleInputEmail1">Potrait Image</label>
              <img src="{{asset($info__->potraitimage)}}" height="150px" width="150px" alt="">
              <input type="file" name="potraitimage" class="required form-control" maxlength="250" @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->potraitimage}}" @endif  />
              
              <label for="exampleInputEmail1">Landscape Image</label>
              <img src="{{asset($info__->landscapeimage)}}" height="150px" width="150px" alt="">
              <input type="file" name="landscapeimage" class="required form-control" maxlength="250" @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->landscapeimage}}" @endif  />
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
