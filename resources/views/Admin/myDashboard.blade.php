@extends('layouts.admin')
    @section('title')
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item active" aria-current="page">خانه</li>
        </ol>

        </div>
    @endsection

    @section('content')
     <div class="container-fluid">
         <div class="row">

             <div class="col-xl-4 col-lg-4">
                 <div class="card pull-up shadow bg-gradient-primary">
                     <div class="card-content">
                         <div class="card-body">
                             <img src="/admin/assets/img/circle.svg" class="card-img-absolute" alt="circle-image">
                             <div class="media d-flex">
                                 <div class="media-body text-right">
                                     <h4 class="text-white">امروز</h4>
                                     <h2 class="text-white mb-0">{{$today}}</h2>
                                 </div>
                                 <div class="align-self-center">
                                     <i class="fe fe-shopping-cart text-white font-large-2 float-right"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-4 col-lg-4">
                 <div class="card pull-up shadow bg-gradient-warning">
                     <div class="card-content">
                         <div class="card-body">
                             <img src="/admin/assets/img/circle.svg" class="card-img-absolute" alt="circle-image">
                             <div class="media d-flex">
                                 <div class="media-body text-right">
                                     <h4 class="text-white">کل سفارشات شما</h4>
                                     <h2 class="text-white mb-0">{{$OrderCount}}</h2>
                                 </div>
                                 <div class="align-self-center">
                                     <i class="fe fe-bar-chart text-white font-large-2 float-right"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-4 col-lg-4">
                 <div class="card pull-up shadow bg-gradient-danger">
                     <div class="card-content">
                         <div class="card-body">
                             <img src="/admin/assets/img/circle.svg" class="card-img-absolute" alt="circle-image">
                             <div class="media d-flex">
                                 <div class="media-body text-right">
                                     <h4 class="text-white">پیام های شما</h4>
                                     <h2 class="text-white mb-0">236</h2>
                                 </div>
                                 <div class="align-self-center">
                                     <i class="fe fe-mail success font-large-2 text-white float-right"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>



         <div class="row">
             <div class="col-12">
                 <div class="card shadow bg-default">
                     <div class="card-header bg-transparent border-0">
                         <h2 class="text-white mb-0">آخرین سفارشات</h2>
                     </div>
                     <div class="">
                         <div class="grid-margin">
                             <div class="">
                                 <div class="table-responsive">
                                     <table class="table card-table table-days table-vcenter text-nowrap  align-items-center">
                                         <thead class="thead-dark">
                                         <tr>
                                             <th> کد سفارش</th>
                                             <th>عنوان سفارش</th>
                                             <th>نام مشتری</th>
                                             <th>جزئیات </th>
                                             <th>تاریخ</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                         @foreach($lastOrders as $order)
                                         <tr>

                                             <td>{{$order->orderID}}</td>
                                             <td class="text-sm font-weight-600">{{$order->title}}</td>
                                             <td> {{$order->user->name}} </td>
                                             <td>
                                             <a href="{{route('detailOrder',$order->id)}}">
                                                 <img width="40" class="img-fluid" src="/admin/assets/img/icon/edit.png">
                                             </a>
                                             </td>
                                             <td class="text-nowrap">{{jdate($order->created_at)}}</td>
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
             <div class="col-12">
                 <div class="card shadow bg-default">
                     <div class="card-header bg-transparent border-0">
                         <h2 class="text-white mb-0">آخرین تیکت ها</h2>
                     </div>
                     <div class="">
                         <div class="grid-margin">
                             <div class="">
                                 <div class="table-responsive">
                                     <table class="table card-table table-days table-vcenter text-nowrap  align-items-center">
                                         <thead class="thead-dark">
                                         <tr>
                                             <th>ردیف</th>
                                             <th>عنوان تیکت</th>
                                             <th>وضعیت</th>
                                             <th>نمایش </th>
                                             <th>بستن تیکت</th>
                                         </tr>
                                         </thead>
                                         <tbody>

                                             <tr>

                                                 <td></td>
                                                 <td class="text-sm font-weight-600"></td>
                                                 <td>  </td>
                                                 <td>

                                                 </td>
                                                 <td class="text-nowrap"></td>
                                             </tr>

                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>



    @endsection

