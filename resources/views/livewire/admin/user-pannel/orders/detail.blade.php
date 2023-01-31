<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="{{route('user.order')}}">سفارشات</a></li>
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

                      <form class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="card shadow">
                                  <img class="card-img-top img-fluid" src="/admin/assets/img/photos/4.jpg" alt="Card image cap">
                                  <div class="card-body">
                                      <h4 class="card-title">طرح سفارش</h4>
                                      <p class="card-text">این طرح تا پیش از رد یا تایید شما چاپ نخواهد شد و شما میتوانید از طریق فرم زیر طرح زیر را برای چاپ تایید و در صورت نیاز به اصلاح انرا رد کرده و مواردی که میخواهید اصلاح شود را برای ما ارسال کنید</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                              <button type="button" class="btn btn-success mt-1 mb-1">تایید طرح</button>
                              <button wire:click="$emit('open_description_of_deny_box')" type="button" class="btn btn-danger mt-1 mb-1">رد طرح</button>
                          </div>
                      </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.FlashMessage.OrderFlashMessage')
    @if($description_of_deny_box==1)
        <div class="modal fade show" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             style="display: block; padding-right: 17px;">
            <form wire:submit.prevent="descriptionOfDeny" >
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">

                        <div class="modal-body">

                            <img src="/admin/assets/img/product/4.jpg">

                            <button type="button" class="btn btn-success mt-1 mb-1">تایید طرح</button>
                            <button wire:click="$emit('open_description_of_deny_box')" type="button" class="btn btn-danger mt-1 mb-1">رد طرح</button>

                            <div class="form-group">
                                <textarea wire:model.defer="description_of_deny">

                              </textarea>
                            </div>

                        </div>
                        <footer class="row">
                            @error('description_of_deny') <span class="error_validation">{{ $message }}</span> @enderror

                        </footer>
                        <div class="modal-footer">
                            <button wire:click="$emit('fadeUploadFile')" type="button" class="btn btn-secondary" data-dismiss="modal">لغو</button>
                            <button type="submit" class="btn btn-primary">اپلود</button>
                            <div wire:loading wire:target="IMGupload">

                                <div
                                    class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-pulse">
                                            <div>
                                            </div>
                                            <div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    @endif
</div>
