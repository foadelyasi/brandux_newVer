
@section('title')
    <title>نمونه کار ها</title>
@endsection

@section('meta')
    <meta name="description" content=" نمونه کار های گروه طراحی برنداکس" />
@endsection



<div>
    <section class="position-relative">
        <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1898" height="315"></canvas></div>
        <div class="container">
            <div class="row  text-center">
                <div class="col">
                    <h1>نمونه کار</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="#">خانه</a>
                            </li>
                            <li class="breadcrumb-item">صفحات</li>
                            <li class="breadcrumb-item">نمونه کار</li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">نمونه کار</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


    {{--porfolio list--}}

    <div class="page-content">

        <!--portfolio start-->

        <section>
            <div class="container">
                <div class="row align-items-end mb-8">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div> <span class="badge badge-primary-soft p-2 font-w-6">
                  نمونه کار
              </span>
                            <h2 class="mt-3">ما کارهای زیادی انجام داده ایم ، بیایید از اینجا بررسی کنیم</h2>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 mr-auto">
                        <div>
                            <p class="lead mb-0">همه نوع مشاغل نیاز به دسترسی به منابع توسعه دارند ، بنابراین ما به شما این گزینه را می دهیم که تصمیم بگیرید میزان استفاده شما چقدر است.</p>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row">
                    <div class="col text-center">
                        <div class="portfolio-filter">
                            <button wire:click="$emit('ChangeCategoryID',0)" data-filter="" class="is-checked mb-3 mb-sm-0">تمام کارها</button>
                            @foreach($categories as $cat)
                            <button wire:click="$emit('ChangeCategoryID',{{$cat->id}})" data-filter=".cat1" class="mb-3 mb-sm-0">
                                {{$cat->title}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="grid columns-3 row popup-gallery" style="position: relative; height: 632px;">
                            <div class="grid-sizer"></div>
                            @foreach($portfolios as $portfolio)
                                <div class="grid-item col-lg-4 col-md-6 mb-5 cat3" style="position: absolute; left: 0px; top: 0px;">
                                <div class="portfolio-item position-relative overflow-hidden">
                                    <img class="img-center w-100" src="/storage/upload/portfolio/{{$portfolio->image1}}" alt="portfolio">
                                    <div class="portfolio-title d-flex justify-content-between align-items-center">
                                        <div> <small class="text-light mb-2">برندینگ</small>
                                            <h6><a class="btn-link text-white" wire:click="detail({{$portfolio->id}})">{{$portfolio->title}}</a></h6>
                                        </div>
                                        <a class="popup-img h2 text-white" href="/front/assets/images/portfolio/large/01.jpg"> <i class="la la-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--portfolio end-->

    </div>
</div>
