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
              <input type="text" name="metadescription" class=" form-control" maxlength="250" @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->metadescription}}" @endif />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea type="text" name="description" rows="3" class="form-control"  @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->description}}" @endif placeholder=""></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Meta Title</label>
              <input type="text" name="meta_title" class=" form-control" maxlength="250" @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->meta_title}}" @endif placeholder="enter meta title" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Message</label>
              <textarea type="text" name="message" rows="3" class="form-control"  @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->message}}" @endif placeholder="message from chairperson"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Mission</label>
              <textarea type="text" name="mission" rows="3" class="form-control"  @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->mission}}" @endif placeholder="mission"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Vision</label>
              <textarea type="text" name="vision" rows="3" class="form-control"  @if(!empty(old('name'))) value="{{old('name')}}" @else value="{{$info__->vision}}" @endif placeholder="vision"></textarea>
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
