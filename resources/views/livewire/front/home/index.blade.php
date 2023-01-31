<div>
    <!--hero section start-->

    <section class="custom-pt-1 custom-pb-3 bg-primary position-relative parallaxie"
             data-bg-img="assets/images/bg/03.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 col-xl-5 ml-auto mb-8 mb-lg-0">
                    <!-- Image -->
                    <img src="/front/assets/images/hero/02.png" class="img-fluid" alt="...">
                </div>
                <div class="col-12 col-lg-7 col-xl-6">
                    <!-- Heading -->
                    <h1 class="display-4 text-white">
                        نحوه ساخت وب سایت با <span class="font-weight-bold">برنداکس </span>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-light">ساخت یک وب سایت زیبا ، تمیز و مدرن با اجزای انعطاف پذیر بوت استرپ.</p>
                    <!-- Buttons --> <a href="/front/#" class="btn btn-outline-light ml-1">
                        جزئیات بیشتر
                    </a>
                    <a href="/front/" class="btn text-white popup-vimeo"> <i
                            class="la la-play-circle mr-1 ic-3x align-middle line-h-0"></i> نمایش ویدئو</a>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
        <div class="shape-1 bottom" style="height: 250px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                      style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
    </section>

    <!--hero section end-->

    <!--service section-->

    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6 order-lg-1 mb-8 mb-lg-0">
                    <img src="/front/assets/images/about/03.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mb-8 mb-lg-0">
                    <div class="mb-5"> <span class="h6 text-primary">
                  خدمات
              </span>
                        <h2 class="mt-3 font-w-5 mb-0">ما چطور به کسب و کارتون کمک می کنیم؟</h2>
                    </div>
                    <div class="d-flex justify-content-between mb-5">
                        <div class="ml-3">
                            <img class="img-fluid" src="/front/assets/img/website.png">
                        </div>
                        <div>
                            <h5 class="mb-2">طراحی سایت</h5>
                            <p class="mb-0">طراحی و ساخت یک سایت مناسب با نوع کسب کار شما در قیمت های متنوع و
                                اقتصادی</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-5">
                        <div class="ml-3">
                            <img width="100" class="img-fluid" src="/front/assets/img/design.png">
                        </div>
                        <div>
                            <h5 class="mb-2">خدمات چاپ و طراحی</h5>
                            <p class="mb-0">طراحی و چاپ تراکت بنرسر رسید و هر انچه که به دیده شدن شما کمک کنه</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="ml-3">
                            <img class="img-fluid" src="/front/assets/img/content.png">
                        </div>
                        <div>
                            <h5 class="mb-2">تولید محتوا</h5>
                            <p class="mb-0">تولید محتوای متنی تصویری و ویدیویی برای سایت و یا صفحه ی اجتماعی کسب و
                                کارتان</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--design product--}}


    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 col-md-12 order-lg-12">
                    <div class="row text-center card-deck">
                        @foreach($designProducts as $dp)
                            <div class="col-lg-3 col-md-6  ">
                                <div  class="product-item product-card"
                                     >
                                    <div class="product-img">
                                        <img class="img-fluid" src="/storage/upload/products/{{$dp->image}}"
                                             alt="{{$dp->title}}">
                                    </div>
                                    <div class="product-desc"><a
                                            class="product-name mt-4 mb-2 d-block link-title">{{$dp->title}}</a>
                                        <span class="product-price">از {{$dp->price}} تومان</span>
                                        <div class="product-link mt-3">
                                            <a class="add-cart " href="{{route('SingleProduct',$dp->slug)}}"> <i class="ti-bag ml-2"></i>سفارش</a>
                                            <a class="wishlist-btn" href="#"> <i class="ti-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="row mt-3 ">
                        <button type="button" class="btn btn-outline-primary mr-md-3 mb-md-0 mb-2">محصولات بیشتر
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--portfolio--}}

    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-12">
                    <div class="mb-6"> <span class="badge badge-primary-soft p-2 font-w-6">
                  نمونه کار
              </span>
                        <h2 class="mt-3">آخرین نمونه کار ها</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-rtl owl-loaded owl-drag" data-dots="false" data-nav="true"
                         data-items="3" data-md-items="2" data-sm-items="1" data-margin="20" data-autoplay="true">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(2261px, 0px, 0px); transition: all 0.25s ease 0s; width: 3767px;">
                                <div class="owl-item cloned" style="width: 356.667px; margin-left: 20px;">
                                    <div class="item">
                                        <div class="portfolio-item position-relative overflow-hidden">
                                            <img class="img-center w-100" src="/front/assets/images/portfolio/02.jpg"
                                                 alt="">
                                            <div
                                                class="portfolio-title d-flex justify-content-between align-items-center">
                                                <div><small class="text-light mb-2">برندینگ</small>
                                                    <h6><a class="btn-link text-white" href="portfolio-single.html">توسعه
                                                            دهنده</a></h6>
                                                </div>
                                                <a class="popup-img h2 text-white"
                                                   href="/front/assets/images/portfolio/large/02.jpg"> <i
                                                        class="la la-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 356.667px; margin-left: 20px;">
                                    <div class="item">
                                        <div class="portfolio-item position-relative overflow-hidden">
                                            <img class="img-center w-100" src="/front/assets/images/portfolio/03.jpg"
                                                 alt="">
                                            <div
                                                class="portfolio-title d-flex justify-content-between align-items-center">
                                                <div><small class="text-light mb-2">برندینگ</small>
                                                    <h6><a class="btn-link text-white" href="portfolio-single.html">توسعه
                                                            دهنده</a></h6>
                                                </div>
                                                <a class="popup-img h2 text-white"
                                                   href="/front/assets/images/portfolio/large/03.jpg"> <i
                                                        class="la la-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 356.667px; margin-left: 20px;">
                                    <div class="item">
                                        <div class="portfolio-item position-relative overflow-hidden">
                                            <img class="img-center w-100" src="/front/assets/images/portfolio/04.jpg"
                                                 alt="">
                                            <div
                                                class="portfolio-title d-flex justify-content-between align-items-center">
                                                <div><small class="text-light mb-2">برندینگ</small>
                                                    <h6><a class="btn-link text-white" href="portfolio-single.html">توسعه
                                                            دهنده</a></h6>
                                                </div>
                                                <a class="popup-img h2 text-white"
                                                   href="/front/assets/images/portfolio/large/04.jpg"> <i
                                                        class="la la-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 356.667px; margin-left: 20px;">
                                    <div class="item">
                                        <div class="portfolio-item position-relative overflow-hidden">
                                            <img class="img-center w-100" src="/front/assets/images/portfolio/01.jpg"
                                                 alt="">
                                            <div
                                                class="portfolio-title d-flex justify-content-between align-items-center">
                                                <div><small class="text-light mb-2">برندینگ</small>
                                                    <h6><a class="btn-link text-white" href="portfolio-single.html">توسعه
                                                            دهنده</a></h6>
                                                </div>
                                                <a class="popup-img h2 text-white"
                                                   href="/front/assets/images/portfolio/large/01.jpg"> <i
                                                        class="la la-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 356.667px; margin-left: 20px;">
                                    <div class="item">
                                        <div class="portfolio-item position-relative overflow-hidden">
                                            <img class="img-center w-100" src="/front/assets/images/portfolio/02.jpg"
                                                 alt="">
                                            <div
                                                class="portfolio-title d-flex justify-content-between align-items-center">
                                                <div><small class="text-light mb-2">برندینگ</small>
                                                    <h6><a class="btn-link text-white" href="portfolio-single.html">توسعه
                                                            دهنده</a></h6>
                                                </div>
                                                <a class="popup-img h2 text-white"
                                                   href="/front/assets/images/portfolio/large/02.jpg"> <i
                                                        class="la la-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 356.667px; margin-left: 20px;">
                                    <div class="item">
                                        <div class="portfolio-item position-relative overflow-hidden">
                                            <img class="img-center w-100" src="/front/assets/images/portfolio/03.jpg"
                                                 alt="">
                                            <div
                                                class="portfolio-title d-flex justify-content-between align-items-center">
                                                <div><small class="text-light mb-2">برندینگ</small>
                                                    <h6><a class="btn-link text-white" href="portfolio-single.html">توسعه
                                                            دهنده</a></h6>
                                                </div>
                                                <a class="popup-img h2 text-white"
                                                   href="/front/assets/images/portfolio/large/03.jpg"> <i
                                                        class="la la-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 356.667px; margin-left: 20px;">
                                    <div class="item">
                                        <div class="portfolio-item position-relative overflow-hidden">
                                            <img class="img-center w-100" src="/front/assets/images/portfolio/04.jpg"
                                                 alt="">
                                            <div
                                                class="portfolio-title d-flex justify-content-between align-items-center">
                                                <div><small class="text-light mb-2">برندینگ</small>
                                                    <h6><a class="btn-link text-white" href="portfolio-single.html">توسعه
                                                            دهنده</a></h6>
                                                </div>
                                                <a class="popup-img h2 text-white"
                                                   href="/front/assets/images/portfolio/large/04.jpg"> <i
                                                        class="la la-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"><span
                                    class="la la-angle-left"><span></span></span></button>
                            <button type="button" role="presentation" class="owl-next"><span
                                    class="la la-angle-right"></span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- website--}}
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-12 col-lg-8 mb-8">
                    <div> <span class="badge badge-primary-soft p-2">
                  <i class="la la-cubes ic-3x rotation"></i>
              </span>
                        <h2 class="mt-3">خدمات طراحی سایت</h2>
                        <p class="lead mb-0">امروز دیگر سایت داشتن یک هزینه نیست . بلکه سرمایه گذاری یک کمپانی برای فروش بیشتر و بهتر دیده شدن در آینده  است</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-12 text-lg-left">
                    <div class="d-flex align-items-start mb-8">
                        <div class="order-lg-1 mr-lg-3">
                            <div class="f-icon-shape-sm text-white bg-primary rounded-circle shadow-primary mr-3 mr-lg-0"> <i class="la la-wechat ic-2x"></i>
                            </div>
                        </div>
                        <div>
                            <h5>چت زنده</h5>
                            <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-8">
                        <div class="order-lg-1 mr-lg-3">
                            <div class="f-icon-shape-sm text-white bg-primary rounded-circle shadow-primary mr-3 mr-lg-0"> <i class="la la-desktop ic-2x"></i>
                            </div>
                        </div>
                        <div>
                            <h5>ریسپانسیو</h5>
                            <p class="mb-0">سایت شما در دیوایس ها و سایز های مختلف قابل مشاهده و کاربری می باشند</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="order-lg-1 mr-lg-3">
                            <div class="f-icon-shape-sm text-white bg-primary rounded-circle shadow-primary mr-3 mr-lg-0"> <i class="ti-check-box ic-2x"></i>
                            </div>
                        </div>
                        <div>
                            <h5>اپدیت رایگان</h5>
                            <p class="mb-0">برنداکس اپدیت های رابط کاربری برای جلوگیری از یکنواختی سایت برای شما در نظر گرفته</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 my-5 my-lg-0">
                    <img src="/front/assets/images/about/09.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 col-12">
                    <div class="d-flex align-items-start mb-8">
                        <div>
                            <div class="f-icon-shape-sm text-white bg-primary rounded-circle shadow-primary ml-3"> <i class="la la-eye ic-2x"></i>
                            </div>
                        </div>
                        <div>
                            <h5>امنیت بالا</h5>
                            <p class="mb-0">تست نفوذ پس از اتمام کار و اطمینان از امنیت سایت شما در برابر حملات سایبری</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-8">
                        <div>
                            <div class="f-icon-shape-sm text-white bg-primary rounded-circle shadow-primary ml-3"> <i class="la la-film ic-2x"></i>
                            </div>
                        </div>
                        <div>
                            <h5>قالب های خلاقانه</h5>
                            <p class="mb-0">با در نظر گرفتن سلیقه ی شما و خلاقیت گروه طراحی برنداکس سعی میکنیم شکیل ترین رابط کاربری ممکن با توجه به نیاز شما را فراهم کنیم</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div>
                            <div class="f-icon-shape-sm text-white bg-primary rounded-circle shadow-primary ml-3"> <i class="la la-headphones ic-2x"></i>
                            </div>
                        </div>
                        <div>
                            <h5>پشتیبانی 24/7</h5>
                            <p class="mb-0">پشتیبانی فنی رایگان بمدت 12 ماه</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <a href="{{route('webDesignService')}}" class="btn btn-primary">جزئیات بیشتر</a>
            </div>
        </div>
    </section>


</div>
