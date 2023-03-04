@section('title')
    <title>مطالب</title>
@endsection

@section('meta')
    <meta name="description" content="داغ ترین مطالب تکنولوژی | آموزش های پیرامون طراحی سایت و فوتوشاپ | ترفند های ویندوز و اندروید " />
@endsection

<div>
    <section class="position-relative">
        <div id="particles-js"><canvas class="particles-js-canvas-el" width="1898" height="315" style="width: 100%; height: 100%;"></canvas></div>
        <div class="container">
            <div class="row  text-center">
                <div class="col">
                    <h1>مطالب</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{url('/')}}">خانه</a>
                            </li>
                            <li class="breadcrumb-item">بلاگ</li>

                        </ol>
                    </nav>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


    <div class="page-content">

        <!--blog start-->

        <section>
            <div class="container">
                <div class="row justify-content-center mb-11">
                    <div class="col-12 col-lg-8">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control ml-sm-2 col" type="search" placeholder="جستجو" aria-label="جستجو">
                            <button class="btn btn-primary my-2 my-sm-0 col-auto" type="submit">جستجو بلاگ</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 mb-6 mb-lg-0">
                        <!-- Blog Card -->
                      @foreach($articles as $article)
                        <div class="card border-0 bg-transparent">
                            <div class="position-absolute bg-white shadow-primary text-center p-2 rounded mr-3 mt-3">
                                <br>{{$article->category->title}}</div>
                            <img class="card-img-top shadow rounded" src="/front/assets/images/blog/01.png" alt="Image">
                            <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#">ساس</a>
                                <h2 class="h5 font-weight-medium">
                                    <a  href="{{route('single.article',$article->slug)}}" class="link-title">{{$article->title}}</a>
                                </h2>
                                <p>{{$article->meta_description}}</p>
                            </div>
                            <div class="card-footer bg-transparent border-0 pt-0">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item pl-4"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 18</a>
                                    </li>
                                    <li class="list-inline-item pl-4"> <a href="#" class="text-muted"><i class="ti-eye mr-1 text-primary"></i> 268</a>
                                    </li>

                                </ul>
                            </div>
                            <div></div>
                        </div>
                        <!-- End Blog Card -->
                        <hr class="my-8">
                        @endforeach
                        <div class="row mt-11">

                               {{$articles->links()}}

                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div>
                            <h4 class="mb-3">مطالب کاربردی</h4>
                            <article>
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <h5 class="h6">
                                            <a class="link-title" href="blog-single.html">صفحه لندینگ قدرتمند و پر سرعت در راست چین</a>
                                        </h5>
                                        <a class="d-inline-block text-muted small font-w-5" href="#">خرداد 1399</a>
                                    </div>
                                    <img src="/front/assets/images/blog/blog-thumb/01.png" class="mr-3 rounded shadow" alt="...">
                                </div>
                            </article>
                            <article class="mt-5">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <h5 class="h6">
                                            <a class="link-title" href="blog-single.html">قدرتمندترین قالبی که شما را رقم می زند.</a>
                                        </h5>
                                        <a class="d-inline-block text-muted small font-w-5" href="#">خرداد 1399</a>
                                    </div>
                                    <img src="/front/assets/images/blog/blog-thumb/02.png" class="mr-3 rounded shadow" alt="...">
                                </div>
                            </article>
                            <article class="mt-5">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <h5 class="h6">
                                            <a class="link-title" href="blog-single.html">یک برند برای یک شرکت مانند یک شخص شهرت است.</a>
                                        </h5>
                                        <a class="d-inline-block text-muted small font-w-5" href="#">خرداد 1399</a>
                                    </div>
                                    <img src="/front/assets/images/blog/blog-thumb/03.png" class="mr-3 rounded shadow" alt="...">
                                </div>
                            </article>
                        </div>
                        <div class="mt-11">
                            <h4 class="mb-3">دسته ها</h4>
                            <ul class="list-unstyled list-group list-group-flush mb-5">
                                <li class="mb-4"> <a class="list-group-item list-group-item-action border-0 p-0" href="#">
                                        همه
                                        <span class="badge badge-primary-soft text-dark font-weight-normal p-2 badge-pill mr-2">74</span>
                                    </a>
                                </li>
                                @foreach($categories as $cat)
                                <li class="mb-4"> <a class="list-group-item list-group-item-action border-0 p-0" href="#">
                                        {{$cat->title}}
                                        <span class="badge badge-primary-soft text-dark font-weight-normal p-2 badge-pill mr-2">23</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-11">
                            <h4 class="mb-3">برچسب ها</h4>
                            <div> <a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">بوتس لند</a>
                                <a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">طراحی وب</a>
                                <a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">ساس</a>
                                <a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">کسب و کار</a>
                                <a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">ساس</a>
                                <a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">نرم افزار</a>
                                <a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">لودینگ</a>
                                <a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">استارت اپ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--blog end-->

    </div>
</div>
