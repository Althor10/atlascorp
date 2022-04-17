<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Footer Column -->
            <div class="col-lg-3 footer_column">
                <div class="footer_col">
                    <div class="footer_content footer_about">
                        <div class="logo_container footer_logo">
                            <div class="logo"><a href="{{route("index")}}"><img src="{{asset('images/logo2.png')}}" alt=""></a></div>
                        </div>
                        </br>
                        </br>
                        <p class="footer_about_text"> We are here to make your life more fun and adventurous! Travel with us to the new frontiers!</p>
                        <ul class="footer_social_list">
                            <li class="footer_social_item"><a href="https://www.pinterest.com/danilo5107/"><i class="fa fa-pinterest"></i></a></li>
                            <li class="footer_social_item"><a href="https://www.facebook.com/althor10"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="footer_social_item"><a href="https://www.instagram.com/patakcoda"><i class="fa fa-instagram"></i></a></li>
                            <li class="footer_social_item"><a href="https://github.com/Althor10"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class="col-lg-3 footer_column">
                <div class="footer_col">
                    <div class="footer_title">blog posts</div>
                    <div class="footer_content footer_blog">

                        <!-- Footer blog item -->
                        <div class="footer_blog_item clearfix">
                            <div class="footer_blog_image"><img src="{{asset('images/footer_blog_1.jpg')}}" alt="https://unsplash.com/@avidenov"></div>
                            <div class="footer_blog_content">
                                <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
                                <div class="footer_blog_date">Nov 29, 2017</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class="col-lg-3 footer_column">
                <div class="footer_col">
                    <div class="footer_title">tags</div>
                    <div class="footer_content footer_tags">
                        <ul class="tags_list clearfix">
                            <li class="tag_item"><a href="#">design</a></li>
                            <li class="tag_item"><a href="#">fashion</a></li>
                            <li class="tag_item"><a href="#">music</a></li>
                            <li class="tag_item"><a href="#">video</a></li>
                            <li class="tag_item"><a href="#">party</a></li>
                            <li class="tag_item"><a href="#">photography</a></li>
                            <li class="tag_item"><a href="#">adventure</a></li>
                            <li class="tag_item"><a href="#">travel</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class="col-lg-3 footer_column">
                <div class="footer_col">
                    <div class="footer_title">contact info</div>
                    <div class="footer_content footer_contact">
                        <ul class="contact_info_list">
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="{{asset('images/placeholder.svg')}}" alt=""></div></div>
                                <div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="{{asset('images/phone-call.svg')}}" alt=""></div></div>
                                <div class="contact_info_text">2556-808-8613</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="{{asset('images/message.svg')}}" alt=""></div></div>
                                <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="{{asset('images/planet-earth.svg')}}" alt=""></div></div>
                                <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2  ">
                <div class="copyright_content d-flex flex-row align-items-center">
                    <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                </div>
            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                    <div class="footer_nav">
                        <ul class="footer_nav_list">
                            <li class="footer_nav_item"><a href="{{route("index")}}">home</a></li>
                            <li class="footer_nav_item"><a href="{{route("aboutpage")}}">about us</a></li>
                            <li class="footer_nav_item"><a href="{{route("offers")}}">offers</a></li>
                            <li class="footer_nav_item"><a href="">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
@yield('scripts')
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@if(session('message'))
    <script type="text/javascript">
        alert('{{session('message')}}');
    </script>
    @endif
</body>

</html>
