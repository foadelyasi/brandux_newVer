<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">سفارشات</a></li>
                <li class="breadcrumb-item active" aria-current="page">جزئیات سفارش</li>
            </ol>

        </div>

    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="card-box card shadow">
                <div class="card-body border-bottom">
                    <div class="clearfix">
                        <div class="float-left">
                            <h3 class="logo mb-0" dir="ltr">#INV-526</h3>
                        </div>
                        <div class="float-right">
                            <h3 class="mb-0">تاریخ : {{$history}}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="float-left">
                                    <h4><strong>صورت حساب بنام : </strong></h4>
                                    <address>
                                        <strong>{{$name}}</strong>

                                    </address>
                                </div>
                                <div class="float-right text-right">
                                    <h4><strong>آدرس : </strong></h4>
                                    <address>
                                        <strong>{{$address}} </strong><br>
                                        {{$post}}
                                        <br>
                                        تلفن : {{$phone}}
                                    </address>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered m-t-30 text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>کد</th>
                                            <th>ویژگی ها</th>
                                            <th>تعداد</th>
                                            <th>توضیحات مشتری</th>
                                            <th class="text-right">تاریخ سفارش</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$orderID}}</td>
                                            <td>
                                                @foreach($attrs as $attr)
                                                    <ul>
                                                        <li>

                                                            <label>{{$attr['attr']}}</label>
                                                            <span>:</span>
                                                            <label>{{$attr['value']}}</label>

                                                        </li>

                                                    </ul>
                                                @endforeach
                                            </td>
                                            <td>{{$qty}}</td>
                                            <td>{{$description}}</td>
                                            <td class="text-right">{{$history}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-12 offset-xl-8">
                                <p class="text-right mt-3 font-weight-600">جمع فاکتور :
                                    {{number_format($amount)}} تومان
                                </p>

                            </div>
                        </div>
                        <hr>
                        <form wire:submit.prevent="sendDesign" class="d-print-none" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-check-label">انتخاب فایل</label>
                                <input wire:model.defer="design" type="file">
                            </div>
                            <div class="float-left">

                                <button type="submit"  class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i>ارسال طرح</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.FlashMessage.OrderFlashMessage')
</div>
