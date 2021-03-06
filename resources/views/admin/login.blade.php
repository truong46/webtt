<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>USNews - Multipurpose News, Magazine and Blog HTML5 Template</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <base href="{{asset('')}}">

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="{{asset('giaodien/img/favicon.png')}}" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="{{asset('giaodien/css/font-awesome.min.css')}}">
    
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="{{asset('giaodien/css/bootstrap.min.css')}}">
    
    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="{{asset('giaodien/css/fontawesome-stars-o.min.css')}}">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('giaodien/css/style.css')}}">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('giaodien/css/responsive-style.css')}}">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('giaodien/css/colors/theme-color-1.css')}}" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('giaodien/css/custom.css')}}">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Login Section Start -->
        <div class="login--section pd--100-0 bg--overlay" data-bg-img="{{asset('giaodien/img/login-img/bg.jpg')}}">
            <div class="container">
                <!-- Login Form Start -->
                <div class="login--form">
                    <div class="title">
                        <h1 class="h1">Login</h1>
                        <p>Login into account by fillup the below form</p>
                    </div>
                    @if(count($errors) > 0)
                    <div class = "alert alert-danger">
                        @foreach ($errors->all() as $err)
                        {{$err}}</br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                    
                    {{session('thongbao')}}
                    
                    @endif 
                    <form action="admin/dangnhap" data-form="validate" method="POST">
                    <input class="hidden" name="_token" vaule="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>
                                <span>Username or Email Address</span>
                                <input type="email" name="email" class="form-control" required>
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Password</span>
                                <input type="password" name="password" class="form-control" required>
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="rememberme">
                                <span>Remember me</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-lg btn-block btn-primary">Log in</button>

                        <p class="help-block clearfix">
                            <a href="#" class="btn-link pull-left">Forgot Username or Password?</a>
                            <a href="#" class="btn-link pull-right">Create An Account</a>
                        </p>
                    </form>
                </div>
                <!-- Login Form End -->
            </div>
        </div>
        <!-- Login Section End -->
    </div>
    <!-- Wrapper End -->

 <!-- ==== jQuery Library ==== -->
 <script src="{{asset('giaodien/js/jquery-3.2.1.min.js')}}"></script>

<!-- ==== Bootstrap Framework ==== -->
<script src="{{asset('giaodien/js/bootstrap.min.js')}}"></script>

<!-- ==== StickyJS Plugin ==== -->
<script src="{{asset('giaodien/js/jquery.sticky.min.js')}}"></script>

<!-- ==== HoverIntent Plugin ==== -->
<script src="{{asset('giaodien/js/jquery.hoverIntent.min.js')}}"></script>

<!-- ==== Marquee Plugin ==== -->
<script src="{{asset('giaodien/js/jquery.marquee.min.js')}}"></script>

<!-- ==== Validation Plugin ==== -->
<script src="{{asset('giaodien/js/jquery.validate.min.js')}}"></script>

<!-- ==== Isotope Plugin ==== -->
<script src="{{asset('giaodien/js/isotope.min.js')}}"></script>

<!-- ==== Resize Sensor Plugin ==== -->
<script src="{{asset('giaodien/js/resizesensor.min.js')}}"></script>

<!-- ==== Sticky Sidebar Plugin ==== -->
<script src="{{asset('giaodien/js/theia-sticky-sidebar.min.js')}}"></script>

<!-- ==== Zoom Plugin ==== -->
<script src="{{asset('giaodien/js/jquery.zoom.min.js')}}"></script>

<!-- ==== Bar Rating Plugin ==== -->
<script src="{{asset('giaodien/js/jquery.barrating.min.js')}}"></script>

<!-- ==== Countdown Plugin ==== -->
<script src="{{asset('giaodien/js/jquery.countdown.min.js')}}"></script>

<!-- ==== RetinaJS Plugin ==== -->
<script src="{{asset('giaodien/js/retina.min.js')}}"></script>

<!-- ==== Google Map API ==== -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

<!-- ==== Main JavaScript ==== -->
<script src="{{asset('giaodien/js/main.js')}}"></script>

</body>
</html>