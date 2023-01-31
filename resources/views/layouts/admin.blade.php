<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
   {{-- <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Start your development with a Dashboard for Bootstrap 4." name="description">


    <!-- Title -->
    <title>قالب مدیریتی آنستا</title>


    <!-- Favicon -->
    <link href="/admin/assets/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    <!-- Icons -->
    <link href="/admin/assets/css/icons.css" rel="stylesheet">

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="/admin/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/assets/css/bootstrap-rtl.min.css">

    <!-- Ansta CSS -->
    <link href="/admin/assets/css/dashboard.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/plugins/fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />

    <!-- Custom scroll bar css-->
    <link href="/admin/assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- Sidemenu Css -->

    <link href="/admin/assets/plugins/toggle-sidebar/css/dark/sidemenu.css" rel="stylesheet">

    <link href="/admin/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />
    <link href="/admin/assets/css/loader.css" rel="stylesheet" />

    {{--fileUpload--}}
    <link href="/admin/assets/plugins/fileuploads/css/dropify.css" rel="stylesheet" />

    <!--Select2 css-->
    <link rel="stylesheet" href="/admin/assets/plugins/select2/select2.css">



    @livewireStyles

</head>
<style>
    .error_validation{
        color: maroon;
        opacity: 0.8;
        font-size: 10pt;
    }
</style>
<body class="app sidebar-mini rtl">

<div id="global-loader"></div>
<div class="page">
{{--   @yield('cat_edit')--}}
        <div class="page-main">
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        @include('layouts.sidebar');
        <!-- Sidebar menu-->

        <!-- app-content-->
        <div class="app-content ">
            <div class="side-app">
                <div class="main-content">
                    <div class="p-2 d-block d-sm-none navbar-sm-search">
                        <!-- Form -->
                        <form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div><input class="form-control" placeholder="جستجو ..." type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Top navbar -->
                    <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar"
                               href="#"></a>
                            <ul class="navbar-nav align-items-center d-none d-xl-block pr-4">
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true"
                                       class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#"
                                       role="button">
                                        تنظیمات پیش فرض <span class="fas fa-caret-down"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><span>مدیریت پروفایل</span></a>
                                        <a class="dropdown-item" href="#"><span>تم</span></a>
                                        <a class="dropdown-item" href="#"><span>رمز عبور</span></a>
                                        <a class="dropdown-item" href="#"><span>روش های پرداخت</span></a>
                                        <a class="dropdown-item" href="#"><span>تنظیمات دیگر</span></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true"
                                       class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#"
                                       role="button">
                                        پروژه ها <span class="fas fa-caret-down"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><span>فعال</span></a>
                                        <a class="dropdown-item" href="#"><span>بازاریابی</span></a>
                                        <a class="dropdown-item" href="#"><span>کاربران</span></a>
                                        <a class="dropdown-item" href="#"><span>توسعه</span></a>
                                        <a class="dropdown-item" href="#"><span>تنظیمات</span></a>
                                    </div>
                                </li>
                            </ul>



                            <!-- Brand -->
                            <a class="navbar-brand pt-0 d-md-none" href="index-ldf-2.html">
                                <img src="/admin/assets/img/brand/logo-light.png" class="navbar-brand-img" alt="...">
                            </a>
                            <!-- Form -->
                            <form class="navbar-search navbar-search-dark form-inline mr-3 ml-lg-auto">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                        </div><input class="form-control" placeholder="جستجو ..." type="text">
                                    </div>
                                </div>
                            </form>
                            <!-- User -->
                            <ul class="navbar-nav align-items-center ">
                                <li class="nav-item d-none d-md-flex">
                                    <div class="dropdown d-none d-md-flex mt-2 ">
                                        <a class="nav-link full-screen-link pl-0 pr-0"><i
                                                class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0"
                                       data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-user "></i>
                                        </div>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item d-flex" href="#">
												<span class="avatar brround mr-3 align-self-center"> <img
                                                        src="/admin/assets/img/faces/male/4.jpg" alt="imag"></span>
                                            <div>
                                                <strong>رضا کریمی</strong> برای شما درخواست دوستی ارسال کرد
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">قبول کردن</span>
                                                    <span class="btn btn-sm btn-outline-primary">حذف</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">
												<span class="avatar brround mr-3 align-self-center"><img
                                                        src="/admin/assets/img/faces/female/14.jpg" alt="imag"></span>
                                            <div>
                                                <strong>نسترن</strong> برای شما درخواست دوستی ارسال کرد
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">قبول کردن</span>
                                                    <span class="btn btn-sm btn-outline-primary">حذف</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">
												<span class="avatar brround mr-3 align-self-center"><img
                                                        src="/admin/assets/img/faces/male/1.jpg" alt="imag"></span>
                                            <div>
                                                <strong>امیر صبور</strong> برای شما درخواست دوستی ارسال کرد
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">قبول کردن</span>
                                                    <span class="btn btn-sm btn-outline-primary">حذف</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div><a
                                            class="dropdown-item text-center text-muted-dark" href="#">مشاهده همه
                                            درخواست ها</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0"
                                       data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-mail "></i>
                                        </div>
                                    </a>
                                    <div
                                        class="dropdown-menu  dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        <a href="#" class="dropdown-item text-center">12 پیغام جدید</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item d-flex">
												<span class="avatar brround mr-3 align-self-center"><img
                                                        src="/admin/assets/img/faces/male/41.jpg" alt="img"></span>
                                            <div>
                                                <strong>نسترن : </strong> سلام با من تماس بگیر ...
                                                <div class="small text-muted">3 ساعت قبل</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
												<span class="avatar brround mr-3 align-self-center"><img
                                                        src="/admin/assets/img/faces/female/1.jpg" alt="img"></span>
                                            <div>
                                                <strong>رضا : </strong> محصولات جدید ارسال شدند
                                                <div class="small text-muted">5 ساعت قبل</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">مشاهده همه پیغام ها</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pl-0"
                                       data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-bell f-30 "></i>
                                        </div>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        @if(\App\Models\Order::where('notification',1)->get() >0)
                                        <a href="{{route('order')}}" class="dropdown-item d-flex">
                                            <div>
                                                <strong>سفارش جدیدی برای شما ثبت شده</strong>
                                                <div class="small text-muted">5 ساعت قبل</div>
                                            </div>
                                        </a>

                                        @endif
                                       @if(\App\Models\Comment::where('status',0)->get() > 0)
                                        <a href="#" class="dropdown-item d-flex">
                                            <div>
                                                <strong>تعدادی نظر جدید ثبت شده</strong>

                                            </div>
                                        </a>
                                            @endif

                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">مشاهده همه اعلان ها</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0"
                                       data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
												<span class="avatar avatar-sm rounded-circle"><img
                                                        alt="Image placeholder"
                                                        src="/admin/assets/img/faces/male/man.png"></span>
                                            <div class="media-body ml-2 d-none d-lg-block">
                                                <span class="mb-0 ">کاربر آنلاین</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">خوش آمدید !</h6>
                                        </div>
                                        <a class="dropdown-item" href="user-profile.html"><i
                                                class="ni ni-single-02"></i> <span>پروفایل من</span></a>
                                        <a class="dropdown-item" href="#"><i class="ni ni-settings-gear-65"></i>
                                            <span>تنظیمات</span></a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item"
                                                                               href="login.html"><i class="ni ni-user-run"></i> <span>خروج</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Top navbar-->

                    <!-- Page content -->
                    <div class="container-fluid pt-8">
                        <div class="page-header mt-0 shadow p-3">
                           @yield('title')
                        </div>
                        <div style="height:80vh">
                            @yield('content')
                        </div>

                        <!-- Footer -->
                       {{-- <footer class="footer">
                            <div class="row align-items-center justify-content-xl-between">
                                <div class="col-xl-6">
                                    <div class="copyright text-center text-xl-right text-muted">
                                        <p class="text-sm font-weight-500">Copyright 2018 © تمامی حقوق محفوظ است</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">

                                </div>
                            </div>
                        </footer>--}}
                        <!-- Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- app-content -->
    </div>
</div>
<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Ansta Scripts -->

<!-- Core -->
<script src="/admin/assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="/admin/assets/js/popper.js"></script>
<script src="/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Optional JS -->
<script src="/admin/assets/plugins/chart.js/dist/Chart.min.js"></script>
<script src="/admin/assets/plugins/chart.js/dist/Chart.extension.js"></script>

<!-- Data tables -->
<script src="/admin/assets/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="/admin/assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>

<!-- Fullside-menu Js-->
<script src="/admin/assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

<!-- Custom scroll bar Js-->
<script src="/admin/assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Ansta JS -->
<script src="/admin/assets/js/custom.js"></script>

<script src="/admin/assets/plugins/fileuploads/js/dropify.min.js"></script>

<!-- Sweet alert Plugin -->
<script src="/admin/assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="/admin/assets/js/sweet-alert.js"></script>

{{--fileUpload--}}
<script src="/admin/assets/plugins/fileuploads/js/dropify.min.js"></script>

{{--ck editor--}}
<script src="/admin/assets/plugins/ckeditor/ckeditor.js"></script>


<script>

    $('.dropify').dropify({
        messages: {
            'default': 'فایل خود را کشیده و اینجا رها کنید یا برای انتخاب فایل کلیک کنید',
            'replace': 'فایل خود را کشیده و اینجا رها کنید یا برای تغییر فایل کلیک کنید',
            'remove': 'حذف',
            'error': 'اوپس،خطایی رخ داده است'
        },
        error: {
            'fileSize': 'فایل انتخابی شما بزرگتر از محدودیت حجم تعیین شده است'
        }
    });

</script>

<script>



    CKEDITOR.replace('editor1', {
        language: 'fa',
        content: 'fa',
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
    });
</script>
<?php
{{--include_once 'admin/assets/plugins/ckeditor/ckeditor.php';--}}
{{--include_once 'admin/assets/plugins/ckfinder/ckfinder.php';--}}
{{--$ckeditor = new CKEditor();--}}
{{--$ckeditor->basePath = '../ckeditor/';--}}
{{--$ckeditor->config['width'] = 850;--}}
{{--CKFinder::SetupCKEditor($ckeditor, 'admin/assets/plugins/ckfinder/');--}}
{{--$ckeditor->replace('editor1');--}}
?>




@livewireScripts

</body>

</html>
