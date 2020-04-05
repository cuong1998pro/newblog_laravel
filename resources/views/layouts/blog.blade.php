<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jimmy's blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/helper.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <div class="body-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">JIMMY98</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseblog">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarcollapseblog">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="{{URL::to('/')}}" class="nav-link">
                                <!-- <i class="fas fa-dashboard"></i> -->
                                Trang chủ</a></li>
                        <li class="nav-item"><a href="{{URL::to('/about-me')}}" class="nav-link">
                                <!-- <i class="fas fa-user"></i> -->
                                Giới thiệu</a></li>
                        <li class="nav-item"><a href="https://www.facebook.com/cuong1998pro" class="nav-link">
                                <!-- <i class="fas fa-user"></i> -->
                                Facebook</a></li>
                        <li class="nav-item"><a href="{{URL::to('/contact-me')}}" class="nav-link">
                                <!-- <i class="fas fa-user"></i> -->
                                Liên hệ</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        {{-- <form class="form-inline" action="index.php" method="post">
                            <div class="form-group">
                                <input class="form-control mr-2" type="text" name="Search" placeholder="Tìm kiếm"
                                    value="">
                                <button class="btn btn-default" name="SearchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">JIMMY's BLOG</h1>
                <p class="lead">A place to share knowledge, experiences and documents for free.</p>
            </div>
        </div>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                        <li class="active">Danh sách bài viết
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="li-main-blog-page pt-60 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        @include('layouts.sitebar')
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="row li-main-content">
                            @yield('content')
                        </div>
                    </div>

                </div>

            </div>
        </div>
        @include('layouts.footer')
    </div>

    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/ajax-mail.js')}}"></script>
    <script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/venobox.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/scrollUp.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
