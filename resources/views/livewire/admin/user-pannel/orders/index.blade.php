<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">سفارشات</a></li>
                <li class="breadcrumb-item active" aria-current="page">لیست سفارشات</li>
            </ol>

        </div>



        {{--  order list      --}}
        <?php
        $i = 1;
        ?>
        <div class="row">
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                <span class="alert-inner--text">شما میتوانید طرح سفارش خود را در ستون "طرح سفارش " تایید و یا رد کنید و در صورت رد کردن می توانید مواردی که باید اصلاح شوند را در ادامه برای ما بفرستید</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>

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
                                            <th>کد شفارش</th>
                                            <th>وضعیت پرداخت</th>
                                            <th> وظعیت طراحی</th>
                                            <th> وظعیت تحویل</th>
                                            <th> تایید مشتری</th>
                                            <th>طرح سفارش</th>
                                            <th>جزئیات سفارش</th>


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

                                                    {{$i++}}
                                                </td>
                                                <td>
                                                    {{$order->title}}
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
                                                    @if($order->design==0)
                                                        <div class="alert alert-danger" role="alert">
                                                            طراحی نشده
                                                        </div>
                                                    @else
                                                        <div class="alert alert-success" role="alert">
                                                            طراحی شده
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($order->send==0)
                                                        <div class="alert alert-danger" role="alert">
                                                            ارسال نشده
                                                        </div>
                                                    @else
                                                        <div class="alert alert-success" role="alert">
                                                            ارشال شده
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($order->confirmed_design==1)
                                                        <div class="alert alert-success" role="alert">
                                                            تایید شده
                                                        </div>
                                                    @elseif($order->confirmed_design==0)
                                                        <div class="alert alert-warning" role="alert">
                                                            تایید نشده
                                                        </div>
                                                    @elseif($order->confirmed_design==2)

                                                        <div class="alert alert-danger" role="alert">
                                                            رد شده
                                                        </div>

                                                    @endif
                                                </td>

                                                <td>
                                                   @if($order->file)
                                                        <img style="cursor: pointer;" wire:click="$emit('confirm_design_section',{{$order->id}})" width="45" class="img-fluid"
                                                             src="/admin/assets/img/icon/jpg.png">
                                                    @else

                                                        <img  width="45" class="img-fluid"
                                                             src="/admin/assets/img/icon/jpgoff.png">

                                                    @endif

                                                </td>

                                                <td>
                                                    <img wire:click="detail({{$order->id}})" width="35" class="img-fluid"
                                                         src="/admin/assets/img/icon/edit.png">
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


    @include('layouts.FlashMessage.OrderFlashMessage')
    @if($confirm_design_section==1)
        <div class="modal fade show" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             style="display: block; padding-right: 17px;">
            <form wire:submit.prevent="descriptionOfDeny" >
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">

                        <div class="modal-body justify-content-center">

                            <img class="img-fluid" src="/admin/assets/img/products/4.jpg">


                        </div>

                        <div class="modal-footer">
                            <button wire:click="confirm_design" type="button" class="btn btn-success mt-1 mb-1">تایید طرح</button>
                            <button wire:click="$emit('open_description_of_deny_box')" type="button" class="btn btn-danger mt-1 mb-1">رد طرح</button>
                            <div wire:loading wire:target="confirm_design">

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
    <style>
        .tt{
            clear:left;
            min-width: 100%;
            max-width: 267px;
            min-height:150px;
            max-height:150px;
        }
    </style>
    @if($description_of_deny_box==1)
        <div class="modal fade show" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             style="display: block; padding-right: 17px;">
            <form wire:submit.prevent="descriptionOfDeny" >
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">

                        <div class="modal-body justify-content-center">

                            <form class="form-group">

                                <textarea placeholder="در این بخش می توانید مواردی که در طرح نیاز به اصلاح دارند را به ما بگویید" class="tt" style="width: 80%;" wire:model.defer="description_of_deny">

                                </textarea>


                            </form>


                        </div>



                        <div class="modal-footer">
                            <button wire:click="descriptionOfDeny" type="button" class="btn btn-success mt-1 mb-1">ارسال</button>
                            <button wire:click="$emit('close_description')" type="button" class="btn btn-danger mt-1 mb-1">لغو</button>
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


