
<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                <div class="logo_container">
                    <div class="logo"><a href="{{ route("index") }}"><img src="{{asset('images/logo2.png')}}" alt=""></a></div>
                </div>
                <div class="main_nav_container ml-auto">
                    <ul class="main_nav_list">
                        @foreach($nav as $n)
                        <li class="main_nav_item"><a href="{{ route($n->path) }}">{{$n->title}}</a></li>
                        @endforeach
                    </ul>
                </div>




                <div class="hamburger">
                    <i class="fa fa-bars trans_200"></i>
                </div>
            </div>
        </div>
    </div>
</nav>
