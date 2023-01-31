<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 4, premium, multipurpose, sass, scss, saas" />
    <meta name="description" content="Bootstrap 4 Landing Page Template" />
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> برنداکس صفحه لندینگ HTML</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="/front/assets/images/favicon.ico" />


    <!-- inject css start -->

    <link href="/front/assets/css/theme-plugin.css" rel="stylesheet" />
    <link href="/front/assets/css/theme.min.css" rel="stylesheet" />
    <link href="/front/assets/css/xzoom.css" rel="stylesheet" />
    <link href="/admin/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />
    <link href="/admin/assets/css/loader.css" rel="stylesheet" />



    <!-- inject css end -->
    @livewireStyles
</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader">
            <span></span>
            <p>Brandux</p>
        </div>
    </div>

    <!-- preloader end -->

    <!--header start-->
    @if(Route::current()->getName()=='welcome')
    <header class="site-header navbar-dark">
        <div id="header-wrap" class="position-absolute w-100 z-index-1">
            <div class="container">
                <div class="row">
                    <!--menu start-->
                    <div class="col d-flex align-items-center justify-content-between">
                        <a class="navbar-brand logo text-white h2 mb-0" href="/front/index.html">
                           <img class="img-fluid" width="150" src="/front/assets/images/BRANDUX-LOGO.PNG">
                        </a>
                        <nav class="navbar navbar-expand-lg mr-auto">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="تغییر ناوبری"> <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item "> <a class="nav-link  active" href="/front/#" >خانه</a>

                                    </li>
                                    <li class="nav-item "> <a class="nav-link " href="{{route('articles')}}">مطالب</a>

                                    </li>
                                    <li class="nav-item "> <a class="nav-link " href="/front/#" data-toggle="dropdown">خدمات ما</a>

                                    </li>
                                    <li class="nav-item "> <a {{route('contactUs')}} class="nav-link" href="/front/#" >تماس با ما</a>

                                    </li>
                                </ul>
                            </div>
                        </nav>

                        <a href="{{route('ShoppingCart')}}"><img  alt="shoppingCart" width="50" class="img-fluid m-2" src="/front/assets/img/shopping-cart(2).png"></a>
                        <a class="btn btn-dark mr-8 d-none d-lg-block" href="/front/#">حساب کاربری</a>
                    </div>
                    <!--menu end-->
                </div>
            </div>
        </div>
    </header>
    @else
        <header class="site-header">
            <div id="header-wrap" class="">
                <div class="container">
                    <div class="row">
                        <!--menu start-->
                        <div class="col d-flex align-items-center justify-content-between">
                            <a class="navbar-brand logo text-dark h2 mb-0" href="index.html">
                                برند<span class="text-primary font-weight-bold">اکس.</span>
                            </a>
                            <nav class="navbar navbar-expand-lg navbar-light mr-auto">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="تغییر ناوبری"> <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">خانه</a>

                                        </li>
                                        <li class="nav-item"> <a class="nav-link dropdown-toggle" href="{{route('articles')}}" data-toggle="dropdown">مطالب</a>

                                        <li class="nav-item"> <a class="nav-link dropdown-toggle" href="/front/#" data-toggle="dropdown">فروشگاه</a>

                                        </li>
                                        <li class="nav-item"> <a {{route('contactUs')}} class="nav-link dropdown-toggle" href="/front/#" >تماس با ما</a>

                                    </ul>
                                </div>
                            </nav>
                            <a class="btn btn-primary mr-8 d-none d-lg-block" href="#">اکنون بخرید</a>
                        </div>
                        <!--menu end-->
                    </div>
                </div>
            </div>
        </header>
    @endif
    <!--header end-->



