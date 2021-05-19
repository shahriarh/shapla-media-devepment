<div class="banner_area">
    <div class="banner_carousel owl-carousel" >
        @foreach ($slider as $list)
        
    
        <div class="single_carousel" style="background-image: url('{{asset($list->image)}}');">
            <div class="banner_text">
                <h3>{{$list->name}}</h3>
                <p>Now In Theaters and on Cinebaz</p>
                <div class="banner_cta">
                    <a href="#" class="theme_btn">Sign up for Cinebaz</a>
                    <!-- <a href="#" class="theme_btn">Get Tickets</a> -->
                </div>
            </div>
        </div>
        {{-- <div class="single_carousel banner_bg_2">
            <div class="banner_text">
                <h3>Mortal Kombat (2021)</h3>
                <p>Now In Theaters and on Cinebaz</p>
                <div class="banner_cta">
                    <a href="#" class="theme_btn">Sign up for Cinebaz</a>
                    <a href="#" class="theme_btn">Get Tickets</a>
                </div>
            </div>
        </div>
        <div class="single_carousel banner_bg_1">
            <div class="banner_text">
                <h3>Mortal Kombat (2021)</h3>
                <p>Now In Theaters and on Cinebaz</p>
                <div class="banner_cta">
                    <a href="#" class="theme_btn">Sign up for Cinebaz</a>
                    <a href="#" class="theme_btn">Get Tickets</a>
                </div>
            </div>
        </div>
        <div class="single_carousel banner_bg_2">
            <div class="banner_text">
                <h3>Mortal Kombat (2021)</h3>
                <p>Now In Theaters and on Cinwbaz</p>
                <div class="banner_cta">
                    <a href="#" class="theme_btn">Sign up for CInebaz</a>
                    <a href="#" class="theme_btn">Get Tickets</a>
                </div>
            </div>
        </div> --}}
        @endforeach 
    </div>
</div>