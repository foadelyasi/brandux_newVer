
@section('title')
    <title>{{$title}}</title>
@endsection

@section('meta')
    <meta name="description" content=" {{$title}}" />
@endsection



<div>
    <section class="position-relative">
        <div id="particles-js">
            <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1898"
                    height="315"></canvas>
        </div>
        <div class="container">
            <div class="row  text-center">
                <div class="col">
                    <h1>جزئیات نمونه کار</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{url('/')}}">خانه</a>
                            </li>
                            <li class="breadcrumb-item">صفحات</li>
                            <li class="breadcrumb-item"><a href="{{route('portfolioList')}}">نمونه کار ها</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">جزئیات نمونه کار</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


    <div class="page-content">

        <!--portfolio start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="owl-carousel owl-rtl owl-loaded owl-drag" data-items="1" data-autoplay="true">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(1905px, 0px, 0px); transition: all 0.25s ease 0s; width: 3810px;">

                                    <div class="owl-item cloned" style="width: 635px;">
                                        <div class="item">
                                            <img width="290" class="img-fluid w-100"
                                                 src="/storage/upload/portfolio/{{$portfolio->image1}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 635px;">
                                        <div class="item">
                                            <img width="290" class="img-fluid w-100"
                                                 src="/storage/upload/portfolio/{{$portfolio->image2}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 635px;">
                                        <div class="item">
                                            <img width="290" class="img-fluid w-100"
                                                 src="/storage/upload/portfolio/{{$portfolio->image3}}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span
                                        class="la la-angle-left"><span></span></span></button>
                                <button type="button" role="presentation" class="owl-next"><span
                                        class="la la-angle-right"></span></button>
                            </div>
                            <div class="owl-dots">
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot active"><span></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <h2 class="title">{{$title}}</h2>
                        <p class="lead mb-5">{{$description}}.</p>
                        <ul class="cases-meta list-unstyled text-muted">

                            <li><span class="text-dark"> ساخته شده با: </span>{{$made_by}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!--portfolio end-->

    </div>
</div>
