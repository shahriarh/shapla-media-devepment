@extends('frontend.master')
 
@section('content')
<div class="banner_area">
    <div class="single_carousel banner_bg_t video_play_screen">
        <a href="https://www.youtube.com/watch?v=RI4shNYmlM0" class="popup-video play_button">
            <svg width="100%" height="100%" focusable="false" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 68 48">
                <path
                    d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.13 34 0 34 0S12.21.13 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C.06 13.05 0 24 0 24s.06 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.87 34 48 34 48s21.79-.13 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C67.94 34.95 68 24 68 24s-.06-10.95-1.48-16.26z"
                    fill="#212121" fill-opacity="0.8">
                </path>
                <path d="M45 24L27 14v20" fill="#fff"> </path>
            </svg>
        </a>
        <div class="banner_text">
            <h3>Tom & Jerry</h3>
            <p>Now In Theaters. Rent Now, Watch Instantly. Pre-order on Blu-ray™ Now.</p>
        </div>
    </div>
</div>
<!-- BANNER::END  -->

<div class="subheader_menu">
    <div class="subheader_menu_left"><a href="/movies">
            <div class="sc-bRBYWo iFDqQu"><span>Movies</span></div>
        </a><a aria-current="page" href="/movies/tom-jerry">
            <div class="sc-bRBYWo kBMRXs"><span>Tom &amp; Jerry</span></div>
        </a></div>
    <ul class="subheader_menu_right">
        <li>
            <a href="#">
                Get Tickets
            </a>
        </li>
        <li>
            <a href="#"> Watch It</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#"> Videos</a>
        </li>
        <li>
            <a href="#"> Gallery</a>
        </li>
    </ul>
</div>

<!-- movie_list_area ::start  -->
<div class="movie_list_area">
    <div class="section__title">
        <h3>Watch It</h3>
    </div>
    <div class="brand_wrapper mb_30">
        <h4 class="f_w_800">Buy / Rent - Digital</h4>
        <div class="brand_wrapper_inner">
            
            <div class="single_brand">
                <a href="#">
                    <img src="img/brand/1.jpg" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="img/brand/1.jpg" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="img/brand/1.jpg" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="{{asset('img/brand/1.jpg')}}" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="{{asset('img/brand/1.jpg')}}" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="{{asset('img/brand/1.jpg')}}" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="{{asset('img/brand/1.jpg')}}" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="{{asset('img/brand/1.jpg')}}" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="{{asset('img/brand/1.jpg')}}" alt="">
                </a>
            </div>
            <div class="single_brand">
                <a href="#">
                    <img src="{{asset('img/brand/1.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="brand_wrapper">
        <h4 class="f_w_800">Buy - On Disc</h4>
        <div class="brand_wrapper_inner">
            <div class="single_brand">
                <a href="#">
                    <img src="img/brand/1.jpg" alt="">
                </a>
            </div>

        </div>
    </div>


</div>
<!-- movie_list_area ::end  -->

<div class="about_movie_wrapper">
    <div class="thumb">
        <img src="{{asset($info__->potraitimage)}}" alt="">
        
    </div>
    <div class="about_info">
        <h3 class="mb_20">About</h3>
        <p class="mb_30">In Theaters and Cinebaz on February 26, 2021</p>
        <p class="mb_30">{{$info__->movie_details}}</p>
        <p class="mb_30">An eye-popping blend of classic animation and live action, Tom and Jerry’s new adventure
            stakes new ground for the iconic characters and forces them to do the unthinkable… work together to save
            the day.</p>
        <button class="more_btn">More</button>
    </div>
    <div class="about_movie_info">
        <div class="about_movie_single">
            <h4>Theatrical Release</h4>
            <p>{{$info__->release_date}}</p>
        </div>
        <div class="about_movie_single">
            <h4>Rating</h4>
            <p>{{$info__->ratings}}</p>
        </div>
        <div class="about_movie_single">
            <h4>Genres</h4>
            <p><span>{{$info__->category->name}}</span></p>
            <p>Action/Adventure, Animation, Family</p>
        </div>
        <div class="about_movie_single">
            <h4>Follow</h4>
            <div class="social_links">
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="movie_player_wrapper">
    <div class="section__title">
        <h3>Videos</h3>
    </div>
    <div class="movie_payer_inner videos_carousel owl-carousel">
        <div class="single_movie_player ">
            <div class="movie_preview movie_bg_t">
                <a href="https://www.youtube.com/watch?v=y1WUmv27fRE" class="movie_play_icon popup-video">
                    <i class="fa fa-play"></i>
                </a>
            </div>
            <div class="movie_captions">
                <h3>Tungi Parar Mia Bhai - Official Trailer</h3>
            </div>
        </div>
        <div class="single_movie_player">
            <div class="movie_preview movie_bg_1">
                <a href="https://www.youtube.com/watch?v=y1WUmv27fRE" class="movie_play_icon popup-video">
                    <i class="fa fa-play"></i>
                </a>
            </div>
            <div class="movie_captions">
                <h3>Tungi Parar Mia Bhai - Official Trailer</h3>
            </div>
        </div>
    </div>
</div>

<div class="gallery_carousel">
    <div class="section__title">
        <h3>Gallery</h3>
    </div>
    <div class="gallery_carousel_inner">
        <div class="slider-for">
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/1.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/3.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/4.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/tungi-para.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/5.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/6.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/7.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/8.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/9.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/10.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/11.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="single_testmonial">
                    <img src="{{asset('img/gallery/12.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="slider-nav">
            <div class="item">
                <img src="{{asset('img/gallery/1.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/3.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/4.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/tungi-para.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/5.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/6.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="'{{asset('img/gallery/7.jpg')}}'" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/8.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/9.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/10.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/11.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('img/gallery/12.jpg')}}" alt="">
            </div>
        </div>
    </div>

</div>

@endsection