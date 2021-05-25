@extends('frontend.master')

@section('content')
  <!-- BANNER::START  -->
  @include('frontend.layouts.banner',['slider'=>$slider])
  <!-- BANNER::END  -->
  <!-- movie_list_area ::start  -->
  @include('frontend.layouts.theatre',['media'=>$media])
  <!-- movie_list_area ::end  -->
  <!-- movie_list_area ::start  -->
  {{-- @include('frontend.layouts.movie') --}}
  @include('frontend.layouts.tvfav',['media'=>$media])
  <!-- movie_list_area ::end  -->
  <!-- BANNER::START  -->
  @include('frontend.layouts.banner',['slider'=>$slider])
  <!-- BANNER::END  -->

 


@endsection