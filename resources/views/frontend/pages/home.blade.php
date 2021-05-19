@extends('frontend.master')

  <!-- BANNER::START  -->
  @include('frontend.layouts.banner',['slider'=>$slider])
  <!-- BANNER::END  -->
  <!-- movie_list_area ::start  -->
  @include('frontend.layouts.theatre',['media'=>$media])
  <!-- movie_list_area ::end  -->
  <!-- movie_list_area ::start  -->
  @include('frontend.layouts.movie')
  <!-- movie_list_area ::end  -->
  <!-- BANNER::START  -->
  @include('frontend.layouts.banner',['slider'=>$slider])
  <!-- BANNER::END  -->

 
@section('content')

@endsection