<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
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
  @include('UserDashboard.layouts.includes.main_header')
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
                @include('UserDashboard.layouts.includes.footer')
                <!-- end:: Footer -->
            </div>
        </div>
    </div>


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

<!-- Mirrored from exprostudio.com/html/classified/loginsignup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 08:52:19 GMT -->
</html>