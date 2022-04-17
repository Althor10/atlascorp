
<!-- Home -->

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/places/about.jpg')}}"></div>
    <div class="home_content">
        <div class="home_title">the offers</div>
    </div>
</div>

<!-- Offers -->
@foreach($hotel as $h)
<div class="listing">

    <!-- Single Listing -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_listing">

                    <!-- Hotel Info -->

                    <div class="hotel_info">

                        <!-- Title -->
                        <div class="hotel_title_container d-flex flex-lg-row flex-column">
                            <div class="hotel_title_content">
                                <h1 class="hotel_title">{{$h->name}}</h1>
                                @if($h->stars == 5)
                                <div class="rating_r rating_r_{{$h->stars}} hotel_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>

                                </div>
                                @elseif($h->stars == 4)
                                <div class="rating_r rating_r_{{$h->stars}} hotel_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>

                                </div>
                                @else($h->stars == 3)
                                <div class="rating_r rating_r_{{$h->stars}}  hotel_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>

                                </div>
                                @endif
                                <div class="hotel_location">345 677 Gran Via Street, no 34, {{$h->planet_name}}</div>
                            </div>
                            <div class="hotel_title_button ml-lg-auto text-lg-right">
                                <?php $idU = session()->get('user')[0]->aid ?>
                                @if(session()->get('user'))
                                <div class="button book_button trans_200"><a href="/book/<?=$idU?>/{{$h->ahid}}">book<span></span><span></span><span></span></a></div>
                                @else
                                    <div class="button book_button trans_200"><a href="/login">book<span></span><span></span><span></span></a></div>
                                    @endif
                                <div class="hotel_map_link_container">
                                    <div class="hotel_map_link">See Location on Map</div>
                                </div>
                            </div>
                        </div>

                        <!-- Listing Image -->

                        <div class="hotel_image">
                            <img src="{{asset($h->img_hotel_path)}}" alt="hotel img">
                            <div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
                                <div class="hotel_review">
                                    <div class="hotel_review_content">
                                        @if(number_format($h->prosekOcena,1)>5)
                                            <div class="hotel_review_title">very good</div>
                                        @elseif(number_format($h->prosekOcena,1)>3)
                                            <div class="hotel_review_title">good</div>
                                        @else
                                            <div class="hotel_reviews_title">bad</div>
                                        @endif
                                        <div class="hotel_review_subtitle">{{$h->brojOcena}} reviews</div>
                                    </div>
                                    <div class="hotel_review_rating text-center">{{number_format($h->prosekOcena,1)}}</div>
                                </div>

                            </div>
                        </div>

                        <!-- Hotel Gallery -->

                        <div class="hotel_gallery">
                            <div class="hotel_slider_container">
                                <div class="owl-carousel owl-theme hotel_slider">

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="{{asset('images/listing_1.jpg')}}">
                                            <img src="{{asset('images/listing_thumb_1.jpg')}}" alt="https://unsplash.com/@jbriscoe">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_2.jpg">
                                            <img src="{{asset('images/listing_thumb_2.jpg')}}" alt="https://unsplash.com/@grovemade">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="{{asset('images/listing_3.jpg')}}">
                                            <img src="{{asset('images/listing_thumb_3.jpg')}}" alt="https://unsplash.com/@fransaraco">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="{{asset('images/listing_4.jpg')}}">
                                            <img src="{{asset('images/listing_thumb_4.jpg')}}" alt="https://unsplash.com/@workweek">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="{{asset('images/listing_5.jpg')}}">
                                            <img src="{{asset('images/listing_thumb_5.jpg')}}" alt="https://unsplash.com/@workweek">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="{{asset('images/listing_6.jpg')}}">
                                            <img src="{{asset('images/listing_thumb_6.jpg')}}" alt="https://unsplash.com/@avidenov">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="{{asset('images/listing_7.jpg')}}">
                                            <img src="{{asset('images/listing_thumb_7.jpg')}}" alt="https://unsplash.com/@pietruszka">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="{{asset('images/listing_8.jpg')}}">
                                            <img src="{{asset('images/listing_thumb_8.jpg')}}" alt="https://unsplash.com/@rktkn">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="{{asset('images/listing_9.jpg')}}">
                                            <img src="{{asset('images/listing_thumb_9.jpg')}}" alt="https://unsplash.com/@mindaugas">
                                        </a>
                                    </div>
                                </div>

                                <!-- Hotel Slider Nav - Prev -->
                                <div class="hotel_slider_nav hotel_slider_prev">
                                    <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
                                                <linearGradient id='hotel_grad_prev'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
											M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
											C22.545,2,26,5.541,26,9.909V23.091z"/>
                                        <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
											11.042,18.219 "/>
										</svg>
                                </div>

                                <!-- Hotel Slider Nav - Next -->
                                <div class="hotel_slider_nav hotel_slider_next">
                                    <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
                                                <linearGradient id='hotel_grad_next'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"/>
                                        <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
										17.046,15.554 "/>
										</svg>
                                </div>

                            </div>
                        </div>

                        <!-- Hotel Info Text -->

                        <div class="hotel_info_text">
                            <p>{{$h->ahdesc}}</p>
                        </div>

                        <!-- Hotel Info Tags -->

                        <div class="hotel_info_tags">
                            <ul class="hotel_icons_list">
                                <ul class="hotel_icons_list">
                                    @if($h->wireless)
                                        <li class="hotel_icons_item"><img src="{{asset('images/wifi-2.png')}}" alt="wifi"></li>
                                    @endif
                                    @if($h->pool)
                                        <li class="hotel_icons_item"><img src="{{asset('images/pool.png')}}" alt="pool"></li>
                                    @endif
                                    @if($h->wheelchair)
                                        <li class="hotel_icons_item"><img src="{{asset('images/wheel.png')}}" alt="invalid"></li>
                                    @endif
                                    @if($h->smoking_area)
                                        <li class="hotel_icons_item"><img src="{{asset('images/smoke.png')}}" alt="smoke"></li>
                                    @endif
                                </ul>
                            </ul>
                        </div>

                    </div>

                    <!-- Rooms -->
                    <div class="rooms">
                        @foreach($rooms as $r)
                        <!-- Room -->
                        <div class="room">

                            <!-- Room -->
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="room_image"><img src="{{asset('images/room_1.jpg')}}" alt="https://unsplash.com/@grovemade"></div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="room_content">
                                        <div class="room_title">{{$r->room_type}}</div>
                                        <div class="room_price">${{$r->price_per_night}}/night</div>
                                        <div class="room_text">{{$r->num_free_rooms}} rooms <b>available</b></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-lg-right">
                                    <div class="room_button">
                                        @if(session()->get('user'))
                                            <div class="button book_button trans_200"><a href="/book/<?=$idU?>/{{$h->ahid}}">book<span></span><span></span><span></span></a></div>
                                        @else
                                            <div class="button book_button trans_200"><a href="/login">book<span></span><span></span><span></span></a></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Room -->


                    </div>

                    <!-- Reviews -->

                    <div class="reviews">
                        <div class="reviews_title">reviews</div>
                        <div class="reviews_container">

                            <!-- Review -->
                            @foreach($reviews as $r)
                            <div class="review">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="review_image">
                                            <img src="{{asset($r->pic)}}" alt="https://unsplash.com/@saaout">
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <div class="review_content">
                                            <div class="review_title_container">
                                                <div class="review_title">"{{$r->subject}}"</div>
                                                <div class="review_rating">{{$r->rating}}</div>
                                            </div>
                                            <div class="review_text">
                                                <p>{{$r->comment}}</p>
                                            </div>
                                            <div class="review_name">{{$r->first_name." ".$r->last_name}}</div>
                                            <?php
                                                $fullDate = strtotime($r->dateMade);
                                                $post = date('d M Y H:m:s',$fullDate)
                                            ?>
                                            <div class="review_date">{{$post}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    <!-- Location on Map -->
                            @if(session()->get('user') || !empty(session()->get('user')))
                                <div class="review">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="review_image">
                                                <?php $picture = session()->get('user')[0]->pic ?>
                                                <img src="{{asset($picture)}}" alt="https://unsplash.com/@saaout">
                                            </div>
                                        </div>
                                        <form action="/comment/{{session()->get('user')[0]->aid}}" method="post" >
                                        <div class="col-lg-11">
                                            @foreach($hotel as $hot)
                                            <input type="hidden" value="{{$hot->ahid}}" name="hid">
                                            @endforeach
                                            <div class="review_content">
                                                <div class="review_title_container">
                                                    <div class="review_title"> Add a comment...
                                                        <div class="form-control">
                                                    <div class="review_text"><input type="text" class='form-control' name="subject" placeholder="Subject..."></div>
                                                    <div class="review_text" ><input type="text" name="text" class='form-control' placeholder="Text..."></div>
                                                            <div class="form-control"> <label for="rating">Rate the Hotel</label>
                                                                <select name="rating" >
                                                                    <option value="-1">Rate...</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                        </div>
                                                            <div class="form-control"><input type="submit" class="btn-danger" value="Comment"></div>

                                                </div>
                                                <div class="review_text">
                                                    <p></p>
                                                </div>
                                                <div class="review_name">{{session()->get('user')[0]->first_name.' '.session()->get('user')[0]->last_name}}</div>

                                                <div class="review_date">{{date('d-M-Y')}}</div>
                                            </div>
                                                </div>@csrf
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @else

                            @endif
                    <div class="location_on_map">
                        <div class="location_on_map_title">location on map</div>

                        <!-- Google Map -->

                        <div class="travelix_map">
                            <div id="google_map" class="google_map">
                                <div class="map_container">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
