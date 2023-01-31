<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">سفارشات</a></li>
                <li class="breadcrumb-item active" aria-current="page">لیست سفارشات</li>
            </ol>

        </div>


        {{--//filter//--}}
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">جست و جو</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">جست و جو بر اساس وضعیت</label>
                                <select wire:model="searchByStatus" id="select-countries" class="form-control custom-select">
                                    <option value="">همه</option>
                                    <option value="Design">طراحی شده</option>
                                    <option value="noDesign">طراحی نشده</option>
                                    <option value="Confirm">تایید شده</option>
                                    <option value="noConfirm">تایید نشده</option>
                                    <option value="Send">ارسال شده</option>
                                    <option value="noSend">ارسال نشده</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>


                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="$refresh" class="navbar-search navbar-search-dark form-inline mr-3 ml-lg-auto">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input wire:model.defer="searchValue" class="form-control" placeholder="جستجو بر اساس کد سفارش ..." type="text">
                                </div>
                                <button  type="submit" class="btn btn-primary ml-4 mt-1 mb-1">جست و جو</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



{{--  order list      --}}
            <?php
            $i = 1;
            ?>
        <div class="row">

            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header table-info border-0">
                        <h2 class=" mb-0">لیست سفارشات</h2>
                    </div>



                    <div>
                        <div class="grid-margin">
                            <div class="">
                                <div class="table-responsive">
                                    <table
                                        class="table card-table  table-info table-vcenter text-nowrap  align-items-center">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>ردیف</th>
                                            <th>عنوان</th>
                                            <th>نام مشتری</th>
                                            <th>کد شفارش</th>
                                            <th>وضعیت پرداخت</th>
                                            <th>تعین وظعیت طراحی</th>
                                            <th>تعیین وظعیت تحویل</th>
                                            <th> تایید مشتری</th>
                                            <th>جزئیات سفارش</th>
                                            <th>ارسال طرح</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($orders==null)
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                                                <span class="alert-inner--text">
                         سفارشی مطابق با جست و جوی شما پیدا نشد
													</span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        @endif
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>
                                                    @if($order->notification==1)
                                                        <span class="badge badge-pill badge-success">جدید</span>
                                                    @endif
                                                    {{$i++}}
                                                </td>
                                                <td>
                                                  {{$order->title}}
                                                </td>

                                                <td>
                                                   {{$order->user->name}}
                                                </td>
                                                <td>
                                                    {{$order->orderID}}
                                                </td>
                                                <td>
                                                    @if($order->payment_status==0)
                                                        <div class="alert alert-danger" role="alert">
                                                            پرداخت نشده
                                                        </div>
                                                    @else
                                                        <div class="alert alert-success" role="alert">
                                                            پرداخت شده
                                                        </div>
                                                    @endif

                                                </td>
                                                <td>
                                                    <div class="custom-switches-stacked">
                                                        <label class="custom-switch">
                                                            <input wire:click="design({{$order->id}},1)" type="radio"  name="design{{$order->id}}" value="1" class="custom-switch-input"
                                                                   @if($order->design==1) checked @endif
                                                            >
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">تکمیل شده</span>
                                                        </label>
                                                        <label class="custom-switch">
                                                            <input wire:click="design({{$order->id}},0)" type="radio" name="design{{$order->id}}" value="2" class="custom-switch-input"
                                                                   @if($order->design==0) checked @endif
                                                            >
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">تکمیل نشده </span>
                                                        </label>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-switches-stacked">
                                                        <label class="custom-switch">
                                                            <input wire:click="delivery({{$order->id}},1)" type="radio" name="delivery{{$order->id}}" value="1" class="custom-switch-input"
                                                            @if($order->send==1) checked @endif
                                                            >
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">تحویل داده شد</span>
                                                        </label>
                                                        <label class="custom-switch">
                                                            <input wire:click="delivery({{$order->id}},0)" type="radio" name="delivery{{$order->id}}" value="2" class="custom-switch-input"
                                                                   @if($order->send==0) checked @endif
                                                            >
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">تحویل داده نشد </span>
                                                        </label>

                                                    </div>
                                                </td>
                                                <td>
                                                    @if($order->confirmed_design==1)
                                                        <div class="alert alert-success" role="alert">
                                                            تایید شده
                                                        </div>
                                                    @elseif($order->confirmed_design=0)
                                                        <div class="alert alert-warning" role="alert">
                                                            تایید نشده
                                                        </div>
                                                    @else

                                                        <div class="alert alert-danger" role="alert">
                                                            رد شده
                                                        </div>

                                                    @endif
                                                </td>

                                                <td>
                                                        <img wire:click="detail({{$order->id}})" width="35" class="img-fluid"
                                                             src="/admin/assets/img/icon/edit.png">
                                                </td>

                                                <td>
                                                    <button wire:click="$emit('upload',{{$order->id}})" type="button"
                                                            class="btn btn-primary mt-1 mb-1" data-toggle="modal"
                                                            data-target="#upload">
                                                        بارگزاری
                                                    </button>
                                                </td>

                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            {{$orders->links()}}
        </div>
    </div>



    @if($upload==1)
        <div class="modal fade show" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             style="display: block; padding-right: 17px;">
            <form wire:submit.prevent="sendDesign({{$order_id}})" enctype="multipart/form-data">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <ul>
                                <li>
                                    <input wire:model.defer="design" type="file"  />
                                </li>

                            </ul>

                            <div>

                            </div>

                        </div>
                        <footer class="row">
                            @error('design') <span class="error_validation">{{ $message }}</span> @enderror

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
    @include('layouts.FlashMessage.OrderFlashMessage')
</div>


