<link href="{{asset('front/UserDashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/normalize.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/icomoon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/flags.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/jquery-ui.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/chartist.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/color.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/UserDashboard/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>
  {{-- @include('UserDashboard.layouts.includes.main_header') --}}
  @include('UserDashboard.layouts.includes.header')
    <!-- end:: Header Mobile -->
    @include('UserDashboard.layouts.includes.slider')

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <!-- end:: Header -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                    @yield('content')

                </div>

                <!-- begin:: Footer -->
                <!-- end:: Footer -->
            </div>
        </div>
    </div>

<div class="tg-breadcrumbarea">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="tg-active">Login/Register</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</div>
<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-content" class="tg-content">
						<div class="tg-loginsignup">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-logingarea">
									<h2>Login Now</h2>
                                    <form class="tg-formtheme tg-formloging"  action="{{ route('login') }}" method="POST">
                                        @csrf
    								<fieldset>
                                        <div class="form-group tg-inputwithicon">

                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email*">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="Password">
											</div>
											<div class="form-group">
												<div class="tg-checkbox">
													<input id="tg-rememberme" type="checkbox" name="rememberme" value="rememberme">
													<label for="tg-rememberme">Keep me logged in</label>
												</div>
												<a class="tg-forgetpassword" href="javascript:void(0);">Forgot Password?</a>
											</div>
											<button class="tg-btn" type="submit">Login</button>
										</fieldset>
									</form>
								</div>
								<div class="tg-texbox">
									<p><strong>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</strong></p>
									<p>Quis nostrud exercitation ullamcoaris nisiuate aliquip ex ea commodo consequat aute irure dolor atem reprehenderit in esse.</p>
									<ul>
										<li>Proident sunt in culpa qui officia</li>
										<li>Deserunt mollit anim idestorum</li>
										<li>Sedutana perspiciatis</li>
										<li>Aunde omnis iste natus voluptatem</li>
										<li>Cullamcoaris nisiutia aliquip</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
								<div class="tg-videobox">
									<figure>
										<img src="{{asset('front/UserDashboard/assets/images/placeholder-02.jpg')}}" alt="image description">
										<a class="tg-btnplayvideo" href="javascript:void(0);"><i class="icon-play3"></i></a>
									</figure>
								</div>
								<div class="tg-title">
									<h2>Register Now</h2>
								</div>
								<div class="tg-haslayout">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                            <form class="tg-formtheme tg-formregister" method="POST"
                                             action="{{route('register') }}">
                                             @csrf
												<fieldset>

													<div class="form-group tg-inputwithicon">
														<i class="icon-user"></i>
                                                        <input type="first_name" name="first_name" id="first_name" class="form-control" placeholder="First Name*">
                                                        @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
													</div>
													<div class="form-group tg-inputwithicon">
														<i class="icon-user"></i>
                                                        <input type="last_name" name="last_name" id="last_name" class="form-control" placeholder="Last Name*">
                                                        @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
													</div>
													<div class="form-group tg-inputwithicon">
														<i class="icon-envelope"></i>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email*">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
													</div>
													<div class="form-group tg-inputwithicon">
														<i class="icon-lock"></i>
                                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password*">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
													</div>
													<div class="form-group tg-inputwithicon">
														<i class="icon-lock"></i>
														<input type="password" name="password_confirmation"
                                                         id="password-confirm" class="form-control" placeholder="Retype Password*">
                                                         @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
													</div>
													<div class="form-group">
														<div class="tg-checkbox">
															<input id="tg-agree" type="checkbox" name="agree" value="agree">
															<label for="tg-agree">By registering, you accept our <a href="javascript:void(0);">Terms &amp; Conditions</a></label>
														</div>
													</div>
													<button class="tg-btn" type="submit">Register</button>
												</fieldset>
											</form>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
											<ul class="tg-sociallogingsignup">

												<li class="tg-facebook">
													<a href="{{url('/redirect')}}">
														<i class="fa fa-facebook"></i>
														<span>Sign in with <strong>“FaceBook”</strong></span>
													</a>
												</li>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </main>

        @include('UserDashboard.layouts.includes.footer')


        <script src="{{asset('front/UserDashboard/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/vendor/jquery-library.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/vendor/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>

        <script src="{{asset('front/UserDashboard/assets/js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci')}}"
        type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/JS/responsivethumbnailgallery.html')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/jquery.flagstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/backgroundstretch.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/jquery.vide.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/jquery.collapse.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/scrollbar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/JS/chartist.min.html')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/countTo.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/appear.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/gmap3.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/UserDashboard/assets/js/main.js')}}" type="text/javascript"></script>


        </body>
