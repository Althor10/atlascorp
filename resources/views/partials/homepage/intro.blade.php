<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center">We have the best tours</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="intro_text text-center">
                    <p> We are here to make your life more fun and adventurous! Travel with us to the new frontiers!</p>
                </div>
            </div>
        </div>
        <div class="row intro_items">

            <!-- Intro Item -->
            @foreach($promo as $p)
            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url({{asset($p->img_hotel_path)}})"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="button intro_button"><div class="button_bcg"></div><a href="/offers/{{$p->pid}}">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h1>{{$p->planet_name}}</h1>
                            <div class="intro_price">From ${{$p->price}}</div>
                            @if($p->stars==5)
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                                @elseif($p->stars==4)
                                <div class="rating rating_4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                @else
                                <div class="rating rating_3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Intro Item -->


        </div>
    </div>
</div>
