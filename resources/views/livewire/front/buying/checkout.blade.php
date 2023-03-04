@section('title')
    <title>بررسی نهایی سفارش</title>
@endsection

@section('meta')
    <meta name="description" content="بررسی نهایی سفارش" />
@endsection



<div>

    <section class="position-relative">
        <div id="particles-js"><canvas class="particles-js-canvas-el" width="1898" height="315" style="width: 100%; height: 100%;"></canvas></div>
        <div class="container">
            <div class="row  text-center">
                <div class="col">
                    <h1>ثبت سفارش</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="#">خانه</a>
                            </li>
                            <li class="breadcrumb-item">سبد خرید</li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">ثبت سفارش</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>

    <div class="page-content">

        <section>
            <div class="container">
                <form wire:submit.prevent="storeOrder" class="row">

                    <div class="col-lg-7 col-md-12">
                        <div class="checkout-form box-shadow white-bg">
                            <h2 class="mb-4">جزئیات خرید</h2>
                            <div class="row">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">عنوان</th>
                                        <th scope="col">جزئیات</th>
                                        <th scope="col">مقدار</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($orderData as $key=>$item)
                                    <tr>

                                        <td>{{$item['name']}}</td>
                                        <td>
                                         @if($item['attributes']==null)
                                             -----
                                        @else
                                         @foreach($item['attributes'] as $attr)
                                            <ul>
                                                <li>

                                                    <label>{{$attr['attr']}}</label>
                                                    <span>:</span>
                                                    <label>{{$attr['value']}}</label>

                                                </li>

                                            </ul>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>{{$updateData[$key]['quantity']}}</td>
                                    </tr>
                                   @endforeach

                                    </tbody>
                                </table>


                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>آدرس</label>
                                        <textarea wire:model.lazy="address" class="form-group" placeholder="استان...شهر...منطقه...کوچه...پلاک"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-md-0">
                                        <label>کد پستی</label>
                                        <input wire:model.defer="post_code" type="text" id="zippostalcode" class="form-control" placeholder=" کد پستی">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 md-mt-5">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="mb-3 text-black">کد تخفیف</h3>
                                <div class="p-3 p-lg-5 border">
                                    <label class="text-black mb-3">اگه کد تخفیف دارید استفاده کنید</label>
                                    <div class="input-group">
                                        <input class="form-control" id="c-code" placeholder="کد تخفیف" aria-label="کد تخفیف" aria-describedby="button-addon2" type="text">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">اعمال</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 p-lg-5 border">
                            <h3 class="mb-3">سفارش شما</h3>
                            @foreach($updateData as $item)
                            <ul class="list-unstyled">


                                <li class="mb-3 border-bottom pb-3"><span> حمل و نقل </span> : پسا کرایه ای</li>
                                <li class="mb-3 border-bottom pb-3"><span> مجموع </span> {{$item['totalAmount']}} تومان</li>
                                <li><span><strong class="cart-total"> پرداختی :</strong></span>  <strong class="cart-total">{{$item['totalAmount']}} تومان </strong>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="cart-detail my-5">
                            <h3 class="mb-3">پرداخت امن</h3>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">کارت به کارت</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">بررسی پرداخت</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">حساب پی پال</label>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">شرایط و ضوابط را خواندم و موافقم</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">برو به پرداخت</button>
                    </div>
                </form>
            </div>
        </section>

    </div>

</div>
