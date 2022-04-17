<div class="trending">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">trending now</h2>
            </div>
        </div>
        <div class="row trending_container">
            @foreach($hotels as $hotel)
            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset($hotel->img_hotel_path)}}" alt="https://unsplash.com/@fransaraco"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="/single/{{$hotel->ahid}}">{{$hotel->name}}</a></div>
                        <div class="trending_price">From ${{$hotel->avg_hotel_price}}</div>
                        <div class="trending_location">{{$hotel->planet_name}}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
