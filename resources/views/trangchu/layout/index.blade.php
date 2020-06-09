<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>Zing - Thông tin uy tín, hình ảnh ấn tượng</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

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
        <script src="{{asset('giaodien/js/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="{{asset('giaodien/js/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
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
        @include('trangchu.layout.header')

        @yield ('content')

        <!-- Banner Section Start -->
        <div class="banner--section pd--150-0 bg--overlay" data-bg-img="giaodien/img/banner-img/bg.jpg">
            <div class="container">
                <div class="banner--content text-center">
                    <div class="sub-title">
                        <p>Bootstrap Based 35+ Demos With 250+ Multi-Page Layouts</p>
                    </div>

                    <div class="title">
                        <h2 class="h2"><strong>USNews Multipurpose News, Magazine and Blog HTML5 Template</strong></h2>
                    </div>

                    <div class="buttons">
                        <a href="#demos" class="btn btn-lg btn-primary" data-trigger="smoothScroll">View Demos</a>
                        <a href="#" class="btn btn-lg btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- Portfolio Section Start -->
        <div id="demos" class="portfolio--section pd--100-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!-- Page Title Start -->
                        <div class="page--title lined pd--30-0 text-center">
                            <h2 class="h2 text-uppercase"><strong>Main Demos</strong></h2>
                        </div>
                        <!-- Page Title End -->
                    </div>
                </div>

                <!-- Portfolio Items Start -->
                <div class="portfolio--items row ptop--30">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="home-1.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/home-1.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="home-1.html" class="btn-link" target="_blank">Home Default</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->

                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="home-1-boxed.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/home-1-boxed.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="home-1-boxed.html" class="btn-link" target="_blank">Home Boxed</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->

                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="home-1-rtl.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/home-1-rtl.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="home-1-rtl.html" class="btn-link" target="_blank">Home RTL</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->

                    
                </div>
                <!-- Portfolio Items End -->
            </div>
        </div>
        <!-- Portfolio Section End -->

        

        <!-- Portfolio Section Start -->
        <div class="portfolio--section pd--100-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!-- Page Title Start -->
                        <div class="page--title lined pd--30-0 text-center">
                            <h2 class="h2 text-uppercase"><strong>Menu Version Demos</strong></h2>
                        </div>
                        <!-- Page Title End -->
                    </div>
                </div>

                <!-- Portfolio Items Start -->
                <div class="portfolio--items row ptop--30">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="home-1.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/home-menu-1.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="home-1.html" class="btn-link" target="_blank">Menu Version 1</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->

                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="home-menu-v2.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/home-menu-2.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="home-menu-v2.html" class="btn-link" target="_blank">Menu Version 2</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->

                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="home-menu-v3.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/home-menu-3.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="home-menu-v3.html" class="btn-link" target="_blank">Menu Version 3</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->    
                </div>
                <!-- Portfolio Items End -->
            </div>
        </div>
        <!-- Portfolio Section End -->

        <!-- Portfolio Section Start -->
        <div class="portfolio--section pd--30-0 bg--color-2 bg--skew-up bg--skew-down">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!-- Page Title Start -->
                        <div class="page--title lined pd--30-0 text-center">
                            <h2 class="h2 text-uppercase"><strong>Single Page Demos</strong></h2>
                        </div>
                        <!-- Page Title End -->
                    </div>
                </div>
                <!-- Portfolio Items Start -->
                <div class="portfolio--items row ptop--30">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="world-news.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/category.jpg')}}" alt=""></a>
                        </div>
                        <div class="title text-center">
                            <h3 class="h4"><a href="world-news.html" class="btn-link" target="_blank">Category Page</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="blog-v1.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/blog-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="title text-center">
                            <h3 class="h4"><a href="blog-v1.html" class="btn-link" target="_blank">Blog Page 1</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="blog-v2.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/blog-2.jpg')}}" alt=""></a>
                        </div>
                        <div class="title text-center">
                            <h3 class="h4"><a href="blog-v2.html" class="btn-link" target="_blank">Blog Page 2</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="blog-v3.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/blog-3.jpg')}}" alt=""></a>
                        </div>
                        <div class="title text-center">
                            <h3 class="h4"><a href="blog-v3.html" class="btn-link" target="_blank">Blog Page 3</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="archives-v1.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/archives-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="title text-center">
                            <h3 class="h4"><a href="archives-v1.html" class="btn-link" target="_blank">Archives Page 1</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="home-8.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/more-demos.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                </div>
                <!-- Portfolio Items End -->
            </div>
        </div>
        <!-- Portfolio Section End -->
        <!-- Portfolio Section Start -->
        <div class="portfolio--section pd--100-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!-- Page Title Start -->
                        <div class="page--title lined pd--30-0 text-center">
                            <h2 class="h2 text-uppercase"><strong>Widget Demos</strong></h2>
                        </div>
                        <!-- Page Title End -->
                    </div>
                </div>
                <!-- Portfolio Items Start -->
                <div class="portfolio--items row ptop--30">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="ad-widgets.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/ad-widgets.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="ad-widgets.html" class="btn-link" target="_blank">Ad Widgets</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="social-widgets.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/social-widgets.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="social-widgets.html" class="btn-link" target="_blank">Social Widgets</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pbottom--30">
                        <div class="img">
                            <a href="subscribe-widgets.html" target="_blank"><img src="{{asset('giaodien/img/portfolio-img/subscribe-widgets.jpg')}}" alt=""></a>
                        </div>

                        <div class="title text-center">
                            <h3 class="h4"><a href="subscribe-widgets.html" class="btn-link" target="_blank">Subscribe Widgets</a></h3>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->   
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        @include('trangchu.layout.footer')

        @yield('content')
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

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
