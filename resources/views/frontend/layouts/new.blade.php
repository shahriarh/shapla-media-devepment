<div class="movie_list_area">
    <div class="section__title">
        <h3>New Released Movies In Theaters and on Cinebaz</h3>
    </div>
    <div class="movie_lists movie_lists_carousel owl-carousel">
        @foreach ($new as $list)
            
        <div class="single_movie">
            <div class="thumb">
                <a href="{{route('frontend.view',$list->id)}}">{{$list->name}}
                    {{-- <a href="{{url('/company/view',$item->id)}}">{{$item -> name}}</a> --}}
                    <img src="{{asset($list->potraitimage)}}" alt="">
                </a>
            </div>
            <div class="movie_meta">
                <span>{{$list->category->name}}</span>
                <h3>
                    <a href="#">
                        {{$list->name}}
                    </a>
                </h3>
                <p>{{$list->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>