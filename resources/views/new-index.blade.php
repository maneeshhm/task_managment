<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Task Managment</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }} ">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customeStyle.css') }}">

    <!-- new css style ---------->
    <link rel="stylesheet" href="{{ asset('frontend\assets\css\newcssstyle.css') }}">

</head>

<body class="full-wrapper">
    <main>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center" style="margin-top:200px">
                <a href="{{ route('userLogin') }}"><button type="button" class="btn btn-outline-primary btnSize">Login</button></a>
                <a href="{{ route('customer.register') }}"><button type="button" class="btn btn-outline-info btnSize" >Register</button></a>
                
                
                
            </div>
        </div>
        <!--? Hero Area Start-->
        {{-- <div class="container-fluid">
            <div class="slider-area">
                <!-- Mobile Device Show Menu-->
                <div class="header-right2 d-flex align-items-center">
                    <!-- Social -->
                    <div class="header-social  d-block d-md-none">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <!-- /End mobile  Menu-->

                <div class="slider-active dot-style">
                    <!-- Single -->
                    <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>Equipment & Tools For Rent</h1>
                                        <span>Find the best equipment & tools for your work!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="single-slider slider-bg2 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>Equipment & Tools For Rent</h1>
                                        <span>Find the best equipment & tools for your work!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="single-slider slider-bg3 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>Equipment & Tools For Rent</h1>
                                        <span>Find the best equipment & tools for your work!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Hero -->
        <!--? Popular Items Start -->
        {{-- <div class="popular-items pt-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Category1.jpg') }}" alt="">
                                <div class="img-cap">
                                    <a href="#"><span>Category 1</span></a>
                                </div>
                                <!-- <div class="favorit-items">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Category2.jpg') }}" alt="">
                                <div class="img-cap">
                                    <a href="#"><span>Category 1</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".4s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Category3.jpg') }}" alt="">
                                <div class="img-cap">
                                    <a href="#"><span>Category 1</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".6s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Category4.jpg') }}" alt="">
                                <div class="img-cap">
                                    <a href="#"><span>Category 1</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Popular Items End -->
        <!--? New Arrival Start -->
        {{-- <div class="new-arrival">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay=".2s">
                            <h2>featured products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Items1.jpg') }}" alt="">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->
                                    <img src="{{ asset('frontend/assets/img/gallery/favorit-card.png') }}" alt="">
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">spanner</a></h3>
                                <div class="rating mb-10">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>Rs 150.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Tool1.jpg') }}" alt="">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->
                                    <img src="{{ asset('frontend/assets/img/gallery/favorit-card.png') }}" alt="">
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Hammer</a></h3>
                                <div class="rating mb-10">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>Rs 200.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Items2.jpg') }}" alt="">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->
                                    <img src="{{ asset('frontend/assets/img/gallery/favorit-card.png') }}" alt="">
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Multi function box</a></h3>
                                <div class="rating mb-10">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>Rs 250.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".4s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Tool2.jpg') }}" alt="">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->
                                    <img src="{{ asset('frontend/assets/img/gallery/favorit-card.png') }}" alt="">
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Glass Cutter</a></h3>
                                <div class="rating mb-10">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>Rs 200.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".5s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Items3.jpg') }}" alt="">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->
                                    <img src="{{ asset('frontend/assets/img/gallery/favorit-card.png') }}" alt="">
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">wrench tool set</a></h3>
                                <div class="rating mb-10">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>Rs 300.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".6s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Tool3.jpg') }}" alt="">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->
                                    <img src="{{ asset('frontend/assets/img/gallery/favorit-card.png') }}" alt="">
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Knitted Jumper</a></h3>
                                <div class="rating mb-10">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>Rs 150.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".7s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Items4.jpg') }}" alt="">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->
                                    <img src="{{ asset('frontend/assets/img/gallery/favorit-card.png') }}" alt="">
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">wrench tool set</a></h3>
                                <div class="rating mb-10">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>Rs 300.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".8s">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/Tool4.jpg') }}" alt="">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->
                                    <img src="{{ asset('frontend/assets/img/gallery/favorit-card.png') }}" alt="">
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Cutting tractor</a></h3>
                                <div class="rating mb-10">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>Rs 500.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-md-8 col-sm-12">
            <div class="row justify-content-center">
                <div class="section-tittle" data-wow-duration="2s" data-wow-delay=".2s">
    
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s"
                        data-wow-delay=".2s">
                        <h2>Who We Are</h2>
                    </div>
                    <p class="pera text-justify">We offer a wide range of tool rentals and equipment rentals
                        for construction, landscaping, renovations, plumbing & drainage
                        contractors.Our customer base ranges from large construction companies to smaller
                        contractors and service businesses.Our knowledgeable staff sets us above the rest.
                        We work hard to deliver the equipment that you need. By asking the right questions and with
                        an understanding
                        of how our equipment is used, we are able to match equipment to your needs. We work at your
                        speed and speak your
                        language to save you time and money. Our delivery system is expandable.By cross-training our
                        people, we can get
                        extra hands where we need them. Our system allows us to turn counter or maintenance people
                        into drivers during
                        peak periods, to keep your orders on schedule</p>
                </div>
            </div>
        </div> --}}
        <!--? New Arrival End -->
        <!--? Services Area Start -->
        {{-- <div class="categories-area section-padding gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-12 offset-md-1">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="{{ asset('frontend/assets/img/icon/ser1.jpg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5 class="text-center">Secure payments</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 ">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="{{ asset('frontend/assets/img/icon/ser2.jpg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5 class="text-center">Order Easily</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 offset-md-1">
                        <div class="single-cat mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="{{ asset('frontend/assets/img/icon/ser3.jpg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5 class="text-center">Fast Delivery</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--? Services Area End -->
    </main>


    @include('sweetalert::alert')

    <!-- JS here -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <!-- Slick-slider , Owl-Carousel ,slick-nav -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- One Page, Animated-HeadLin, Date Picker -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gijgo.min.js') }}"></script>

    <!-- Nice-select, sticky,Progress -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
