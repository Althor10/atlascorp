<div class="top_bar">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-row">
                <div class="phone">+45 345 3324 56789</div>
                <div class="social">
                    <ul class="social_list">
                        <li class="social_list_item"><a href="https://www.pinterest.com/danilo5107/"><i class="fa fa-pinterest"></i></a></li>
                        <li class="social_list_item"><a href="https://www.facebook.com/althor10"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="social_list_item"><a href="https://www.instagram.com/patakcoda"><i class="fa fa-instagram"></i></a></li>
                        <li class="social_list_item"><a href="https://github.com/Althor10"><i class="fa fa-github"></i></a></li>
                        <ul>
                </div>
                <div class="user_box ml-auto">

                    @if(session()->get('user') || !empty(session()->get('user')))

                        <div class="user_box_login user_box_link"><a href="{{route('logout')}}">logout</a></div>
                        @if( session()->get('user')[0]->name == 'admin')
                                <div class="user_box_login user_box_link"><a href="{{route('admin')}}">Admin Panel</a></div>
                            @else
                                <div class="user_box_login user_box_link"><a href="/userPage/{{session()->get('user')[0]->aid}}">User Page</a></div>
                            @endif
                        @else
                        <div class="user_box_login user_box_link"><a href="{{route('login')}}">login</a></div>

                        <div class="user_box_register user_box_link"><a href="{{route('register')}}">register</a></div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
