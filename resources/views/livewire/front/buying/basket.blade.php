
@section('title')
    <title>سبد خرید</title>
@endsection

@section('meta')
    <meta name="description" content=" سبد خرید " />
@endsection




<div>
    <style>
        .btn-product{
            border: 1px solid #bdbec7!important;
        }
    </style>
    <section class="position-relative">
        <div id="particles-js"><canvas class="particles-js-canvas-el" width="1898" height="315" style="width: 100%; height: 100%;"></canvas></div>
        <div class="container">
            <div class="row  text-center">
                <div class="col">
                    <h1>سبد محصولات</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{route('welcome')}}">خانه</a>
                            </li>
                            <li class="breadcrumb-item">فروشگاه</li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">سبد محصولات</li>
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
                @if(! session()->has('ShoppingCart'))

                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="/front/assets/images/empty-basket.jpg">
                        </div>
                    </div>

                @else
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="cart-table table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">محصول</th>
                                    <th scope="col">قیمت</th>
                                    <th scope="col">تعداد</th>
                                    <th scope="col">مجموع</th>
                                    <th scope="col">پاک کردن</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <a href="#">
                                                <img width="80" class="img-fluid mr-lg-2 mb-2 mb-lg-0" src="/storage/upload/products/{{$item['image']}}" alt="">
                                            </a>
                                            <div class="media-body text-left">
                                                <p class="mb-0">{{$item['name']}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="mb-0">{{$item['price']}}</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button wire:click="decrease" class="btn-product btn-product-up"> <i class="ti-minus"></i>
                                            </button>
                                            <input wire:model.debounce.500ms="qty" class="form-product" type="number" name="form-product" >
                                            <button wire:click="increase" class="btn-product btn-product-down"> <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="mb-0">{{$item['price'] * $qty}}</h5>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="ti-close"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <form wire:submit.prevent="discount" class="row mt-8">

                    <div class="row">
                        <div class="col-md-12">
                            <label class="text-black h4" for="coupon">تخفیف</label>
                            <p>کد تخفیف خود را سریع استفاده کنید.</p>
                        </div>

                        <div class="col-md-6 mb-3 mb-md-0">
                            <input wire:model.defer="discount" class="form-control py-3" id="coupon" placeholder="کد تخفیف" type="text">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-sm px-4">اعمال کد تخفیف</button>
                        </div>


                    </div>

                </form>
                @if(session('discount_fail'))
                    <div class="row mt-2">
                        <div class="alert alert-danger" role="alert">
                            این کدو قبلا استفاده کردی عزیز
                        </div>
                    </div>
                    @endif
                    @if(session('discount_success'))

                        <div class="row mt-2">
                            <div class="alert alert-success" role="alert">
                                کد تخفیفت رو قیمت نهایی اعمال شد
                            </div>
                        </div>
                    @endif
                    @if(session('discount_noExist'))

                        <div class="row mt-2">
                            <div class="alert alert-success" role="alert">
                                کد تخفیفت و اشتباه زدی عزیز
                            </div>
                        </div>
                    @endif

                    <div class="row mt-8">
                    <div class="col-lg-6">
                        <div class="row mb-6">

                            <h3 class="text-black h4 text-uppercase">توضیحات</h3>
                                <textarea wire:model.lazy="description" style="width: 100%;" placeholder="جزئیاتی مانند تم رنگی ، راه های ارتباطی ، شعار تبلیغاتی و چیز هایی که میخواهید در سفارش شما لحاظ شود"></textarea>
                           </div>

                    </div>
                    <div class="col-lg-6 pl-5 mt-5 mt-lg-0">
                        <div class="row justify-content-end">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12 text-left border-bottom mb-5">
                                        <h3 class="text-black h4 text-uppercase">مجموع سبد</h3>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <span class="text-black">جمع</span>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <strong class="text-black">  {{number_format($item['price'] * $qty)}}  &nbsp;&nbsp;تومان</strong>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <span class="text-black">کل خرید</span>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <strong class="text-black">  {{number_format($item['price'] * $qty)}}&nbsp;&nbsp; تومان  </strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <form wire:submit.prevent="savingOrder">
                                           <input wire:model.defer="newAmount" type="hidden" value="{{$item['price'] * $qty}}">
                                           <input wire:model.defer="newQuantity" type="hidden" value="{{$qty}}">
                                           <button type="submit" class="btn btn-success btn-md btn-block" >ثبت سفارش</button>

                                        <button wire:click="clearOrder" class="btn btn-outline-danger btn-md btn-block" href="#">لغو سفارش</button>
                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </section>

    </div>
</div>
