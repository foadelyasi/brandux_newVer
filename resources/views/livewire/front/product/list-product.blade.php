@section('title')
    <title>محصولات</title>
@endsection

@section('meta')
    <meta name="description" content=" محصولات گروه طراحی برنداکس | کارت ویزیت ، تراکت ، بنر ، پاکت و ..." />
@endsection



<div>


    <div class="page-content">

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 col-lg-6 order-lg-1 mb-8 mb-lg-0">
                        <!-- Image -->
                        <img src="/front/assets/images/hero/herostore.png" class="img-fluid" alt="store">
                    </div>
                    <div class="col-12 col-lg-7 col-xl-6">
                        <!-- Heading -->
                        <h5 class="badge badge-success">طراحی شده برای همه چی</h5>
                        <h1 class="display-4">
                            هر چی که بهتر نشونت میده <span class="text-primary">سفارش بده</span>
                        </h1>
                        <!-- Text -->
                        <p class="lead text-muted">تو فروشگاهمون تمام محصولاتی که واسه تبلیغاتت مناسبه داریم </p>
                        <!-- Buttons --> <a href="#" class="btn btn-primary shadow ml-1">
                            مطالعه بیشتر
                        </a>
                        <a href="#" class="btn btn-outline-primary">
                            شروع کنید
                        </a>

                    </div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .container -->
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="mt-8">
                        <h5 class="mb-5">دسته بندی ها</h5>
                        <div class="size-choose">
                            <ul class="list-inline">
                                <li>
                                    <input name="sc" id="xs-size" type="radio">
                                    <label for="xs-size">XS</label>
                                </li>
                                <li>
                                    <input name="sc" id="s-size" type="radio">
                                    <label for="s-size">S</label>
                                </li>
                                <li>
                                    <input name="sc" id="m-size" checked="" type="radio">
                                    <label for="m-size">M</label>
                                </li>
                                <li>
                                    <input name="sc" id="l-size" type="radio">
                                    <label for="l-size">L</label>
                                </li>
                                <li>
                                    <input name="sc" id="xl-size" type="radio">
                                    <label for="xl-size">XL</label>
                                </li>
                                <li>
                                    <input name="sc" id="xxl-size" type="radio">
                                    <label for="xxl-size">XXL</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 order-lg-12">
                        <div class="card mx-auto col-md-3 col-10 mt-5">
                            <img class='mx-auto img-thumbnail'
                                 src="https://i.imgur.com/pjITBzX.jpg"
                                 width="auto" height="auto"/>
                            <div class="card-body text-center mx-auto">
                                <div class='cvp'>
                                    <h5 class="card-title font-weight-bold">Yail wrist watch</h5>
                                    <p class="card-text">$299</p>
                                    <a href="#" class="btn details px-auto">view details</a><br />
                                    <a href="#" class="btn cart px-auto">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="..." class="mt-8">
                            <ul class="pagination">
                                <li class="page-item mr-auto"> <a class="page-link" href="#">قبلی</a>
                                </li>
                                <li class="page-item"><a class="page-link border-0 rounded text-dark" href="#">1</a>
                                </li>
                                <li class="page-item active" aria-current="page"> <a class="page-link border-0 rounded" href="#">2 <span class="sr-only">(جاری)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link border-0 rounded text-dark" href="#">3</a>
                                </li>
                                <li class="page-item"><a class="page-link border-0 rounded text-dark" href="#">...</a>
                                </li>
                                <li class="page-item"><a class="page-link border-0 rounded text-dark" href="#">5</a>
                                </li>
                                <li class="page-item ml-auto"> <a class="page-link" href="#">بعدی</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </section>

    </div>


</div>
