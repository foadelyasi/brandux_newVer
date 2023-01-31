<div>
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a>سفارش</a></li>
            <li class="breadcrumb-item active" aria-current="page">افزودن سفارش</li>
        </ol>

    </div>

<style>
.select{
    width: 60%;
    border-radius: 5px;
    border: 1px solid #9f9999;
    background: powderblue;
    color: mediumblue;
    height: 35px;
}
</style>
    <div class="row">
        <!-- BASIC WIZARD -->
        <div class="col-xl-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <h2 class="mb-0">فرم چند مرحله ای ساده</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div id="basicwizard" class="border pt-0">
                            <ul class="nav nav-tabs nav-justified navtab-wizard bg-muted">
                                <li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link font-bold active show">انتخاب محصول</a></li>
                                <li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link font-bold">اطلاعات سفارش</a></li>
                                <li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link font-bold">فاکتور</a></li>
                            </ul>
                            <div class="tab-content card-body  b-0 mb-0">
                                <div class="tab-pane fade active show" id="tab1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group clearfix">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <label class="control-label form-label" for="userName">محصول</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <select class="select">
                                                            <option>کس</option>
                                                            <option>کون</option>
                                                            <option>عن</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group  clearfix">
                                                <div class="row ">
                                                    <div class="col-lg-4">

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group clearfix">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <label class="control-label form-label" for="name"> نام</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input id="name" name="name" type="text" class="required form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <label class="control-label form-label" for="surname"> نام خانوادگی</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input id="surname" name="surname" type="text" class="required form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <label class="control-label " for="email">ایمیل</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input id="email" name="email" type="text" class="required email form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group clearfix">
                                                <div class="checkbox checkbox-info">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label text-dark pr-4">
																					با قوانین و مقررات موافقم</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline wizard mb-0">
                                    <li class="previous list-inline-item disabled"><a href="#" class="btn btn-primary mb-0 waves-effect waves-light">قبلی</a>
                                    </li>
                                    <li class="next list-inline-item float-left"><a href="#" class="btn btn-primary mb-0 waves-effect waves-light">بعدی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
