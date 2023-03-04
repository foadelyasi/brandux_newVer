
@section('title')
    <title>بررسی پرداخت</title>
@endsection

@section('meta')
    <meta name="description" content=" بررسی پرداخت" />
@endsection


<div>

    <section class="position-relative">
        <div id="particles-js"><canvas class="particles-js-canvas-el" width="1898" height="315" style="width: 100%; height: 100%;"></canvas></div>
        <div class="container">
            <div class="row  text-center">
                <div class="col">
                    <h1>تکمیل سفارش</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{route('welcome')}}">خانه</a>
                            </li>
                            <li class="breadcrumb-item">فروشگاه</li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">تکمیل سفارش</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>

    <div class="page-content">

        <section class="text-center pb-11">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="mb-4">ممنون از اعتمادت به گروهمون </h3>

                        <table class="table">
                            <thead>
                            <tr>

                                <th scope="col">کد سفارش</th>
                                <th scope="col">کد تراکنش</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>

                            </tbody>
                        </table>
                        <a class="btn btn-primary" href="#">خانه</a>
                        <a class="btn btn-primary" href="#">ادامه خرید</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

</div>
