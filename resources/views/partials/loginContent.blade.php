<!-- Home -->

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/places/login2.jpg')}}"></div>
    <div class="home_content">
        <div class="home_title">Login</div>
    </div>
</div>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form  method='post' action="{{route('loginIn')}}" class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
                @csrf
                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                    <input id="first-name" class="input100" type="text" name="usr" placeholder="User name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" value="Sign in" name="btnSubmit" class="login100-form-btn"/>

                </div>

                <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

                    <a href="#" class="txt2">
                        User name / password?
                    </a>
                    @if(session('message'))
                            <li style="color:red;">{{session('message')}}</li>
                    @endif

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <li style="color:red;">{{$error}}</li>
                        @endforeach
                    @endif
                </div>

                <div class="w-full text-center">
                    <a href="#" class="txt3">
                        Sign Up
                    </a>
                </div>
            </form>


            <div class="login100-more" style="background-image: url('{{asset('images/places/Acidalia.jpg')}}');"></div>

        </div>

    </div>
</div>



<div id="dropDownSelect1"></div>

