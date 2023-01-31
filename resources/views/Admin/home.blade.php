@extends('layouts.admin')
    @section('title')
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item active" aria-current="page">خانه</li>
        </ol>


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
                                     <h4 class="text-white">بازدید امروز</h4>
                                     <h2 class="text-white mb-0">312</h2>
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
                                     <h4 class="text-white">صندوق دریافت</h4>
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
             <div class="col-xl-3">
                 <div class="card shadow overflow-hidden">
                     <div class="card-body">
                         <div class="widget text-center">
                             <div><i class="fas fa-users fa-5x text-yellow"></i></div>
                             <h4 class="text-muted mt-2 mb-0">تعداد کل کاربران</h4>
                             <h2 class="display-2 mb-0">{{$userCount}}</h2>
                             <a href="#" class="btn btn-outline-yellow mt-3 btn-sm btn-pill">مشاهده
                                 همه</a>
                         </div>
                     </div>
                     <span class="updating-chart" data-peity="{ &quot;fill&quot;: [&quot;#ffa21d&quot;]}" style="display: none;">4,2,2,2,1,9,1,4,9,7,9,6,5</span><svg class="peity" height="80" width="100%"><polygon fill="#ffa21d" points="0 79.5 0 44.38888888888889 23.566666666666666 61.94444444444444 47.13333333333333 61.94444444444444 70.7 61.94444444444444 94.26666666666667 70.72222222222223 117.83333333333333 0.5 141.4 70.72222222222223 164.96666666666667 44.38888888888889 188.53333333333333 0.5 212.1 18.055555555555557 235.66666666666666 0.5 259.23333333333335 26.833333333333336 282.8 35.61111111111111 282.8 79.5"></polygon><polyline fill="none" points="0 44.38888888888889 23.566666666666666 61.94444444444444 47.13333333333333 61.94444444444444 70.7 61.94444444444444 94.26666666666667 70.72222222222223 117.83333333333333 0.5 141.4 70.72222222222223 164.96666666666667 44.38888888888889 188.53333333333333 0.5 212.1 18.055555555555557 235.66666666666666 0.5 259.23333333333335 26.833333333333336 282.8 35.61111111111111" stroke="" stroke-width="1" stroke-linecap="square"></polyline></svg>
                 </div>
             </div>
             <div class="col-xl-3">
                 <div class="">
                     <div class="">
                         <div class="row">
                             <div class="col-xl-12 col-lg-12 col-sm-12">
                                 <div class="card shadow overflow-hidden">
                                     <div class="card-body pb-0">
                                         <div class="widget text-center">
                                             <small class="text-muted">فروش ماهیانه</small>
                                             <h2 class="text-xxl mb-0">{{number_format($monthlyProfit)}}</h2>
                                         </div>
                                     </div>
                                     <span class="bar" data-peity="{ &quot;fill&quot;: [&quot;#00c3ed&quot;]}" style="display: none;">5,4,5,2,8,4,5,6,5,2,4,4,8,4,6,2,3,4</span><svg class="peity" height="60" width="100%"><rect fill="#00c3ed" x="1.5711111111111111" y="22.5" width="12.568888888888889" height="37.5"></rect><rect fill="#00c3ed" x="17.282222222222224" y="30" width="12.568888888888889" height="30"></rect><rect fill="#00c3ed" x="32.99333333333333" y="22.5" width="12.568888888888893" height="37.5"></rect><rect fill="#00c3ed" x="48.70444444444445" y="45" width="12.568888888888893" height="15"></rect><rect fill="#00c3ed" x="64.41555555555556" y="0" width="12.568888888888907" height="60"></rect><rect fill="#00c3ed" x="80.12666666666667" y="30" width="12.568888888888907" height="30"></rect><rect fill="#00c3ed" x="95.83777777777777" y="22.5" width="12.568888888888907" height="37.5"></rect><rect fill="#00c3ed" x="111.54888888888888" y="15" width="12.568888888888921" height="45"></rect><rect fill="#00c3ed" x="127.25999999999999" y="22.5" width="12.568888888888893" height="37.5"></rect><rect fill="#00c3ed" x="142.9711111111111" y="45" width="12.568888888888921" height="15"></rect><rect fill="#00c3ed" x="158.68222222222224" y="30" width="12.568888888888893" height="30"></rect><rect fill="#00c3ed" x="174.39333333333332" y="30" width="12.568888888888921" height="30"></rect><rect fill="#00c3ed" x="190.10444444444445" y="0" width="12.568888888888893" height="60"></rect><rect fill="#00c3ed" x="205.81555555555553" y="30" width="12.568888888888921" height="30"></rect><rect fill="#00c3ed" x="221.52666666666667" y="15" width="12.568888888888893" height="45"></rect><rect fill="#00c3ed" x="237.23777777777775" y="45" width="12.56888888888895" height="15"></rect><rect fill="#00c3ed" x="252.94888888888894" y="37.5" width="12.568888888888836" height="22.5"></rect><rect fill="#00c3ed" x="268.6600000000001" y="30" width="12.568888888888807" height="30"></rect></svg>
                                 </div>
                                 <div class="card shadow overflow-hidden">
                                     <div class="card-body pb-0">
                                         <div class="widget text-center">
                                             <small class="text-muted">کاربران انلاین</small>
                                             <h2 class="text-xxl mb-0">248</h2>
                                         </div>
                                     </div>
                                     <span class="bar" data-peity="{ &quot;fill&quot;: [&quot;#18b16f&quot;]}" style="display: none;">5,4,5,2,8,4,5,6,5,2,4,4,8,4,6,2,3,4</span><svg class="peity" height="60" width="100%"><rect fill="#18b16f" x="1.5711111111111111" y="22.5" width="12.568888888888889" height="37.5"></rect><rect fill="#18b16f" x="17.282222222222224" y="30" width="12.568888888888889" height="30"></rect><rect fill="#18b16f" x="32.99333333333333" y="22.5" width="12.568888888888893" height="37.5"></rect><rect fill="#18b16f" x="48.70444444444445" y="45" width="12.568888888888893" height="15"></rect><rect fill="#18b16f" x="64.41555555555556" y="0" width="12.568888888888907" height="60"></rect><rect fill="#18b16f" x="80.12666666666667" y="30" width="12.568888888888907" height="30"></rect><rect fill="#18b16f" x="95.83777777777777" y="22.5" width="12.568888888888907" height="37.5"></rect><rect fill="#18b16f" x="111.54888888888888" y="15" width="12.568888888888921" height="45"></rect><rect fill="#18b16f" x="127.25999999999999" y="22.5" width="12.568888888888893" height="37.5"></rect><rect fill="#18b16f" x="142.9711111111111" y="45" width="12.568888888888921" height="15"></rect><rect fill="#18b16f" x="158.68222222222224" y="30" width="12.568888888888893" height="30"></rect><rect fill="#18b16f" x="174.39333333333332" y="30" width="12.568888888888921" height="30"></rect><rect fill="#18b16f" x="190.10444444444445" y="0" width="12.568888888888893" height="60"></rect><rect fill="#18b16f" x="205.81555555555553" y="30" width="12.568888888888921" height="30"></rect><rect fill="#18b16f" x="221.52666666666667" y="15" width="12.568888888888893" height="45"></rect><rect fill="#18b16f" x="237.23777777777775" y="45" width="12.56888888888895" height="15"></rect><rect fill="#18b16f" x="252.94888888888894" y="37.5" width="12.568888888888836" height="22.5"></rect><rect fill="#18b16f" x="268.6600000000001" y="30" width="12.568888888888807" height="30"></rect></svg>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-6">
                 <div class="">
                     <div class="">
                         <div class="row">
                             <div class="col-xl-6 col-lg-6 col-sm-6">
                                 <div class="card shadow">
                                     <div class="card-body">
                                         <div class="widget text-center">
                                             <small class="">درامد نسبت به ماه قبل</small>
                                             <h2 class="text-xxl mb-1 @if($avrageProfit2CurruntMonth<0) text-danger @else text-success @endif">{{number_format($avrageProfit2CurruntMonth)}}</h2>
                                             <p class="mb-0"><span class=""><i class="fas @if($avrageProfit2CurruntMonth>0) fa-caret-up ml-1 text-success @else fa-caret-down ml-1 text-danger @endif "></i>
																		نسبت به ماه قبل</span>@if($avrageProfit2CurruntMonth>0) افزایش داشته @else کاهش داشته @endif</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card shadow">
                                     <div class="card-body">
                                         <div class="widget text-center">
                                             <small class="">خرید حضوری</small>
                                             <h2 class="text-xxl mb-1 text-yellow">256 تومان</h2>
                                             <p class="mb-0"><span class=""><i class="fas fa-caret-down text-danger ml-1"></i>
																		5%</span> در ماه گذشته</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-6 col-lg-6 col-sm-6">
                                 <div class="card shadow">
                                     <div class="card-body">
                                         <div class="widget text-center">
                                             <small class="">خرید اینترنتی</small>
                                             <h2 class="text-xxl text-primary mb-1">329 تومان</h2>
                                             <p class="mb-0"><span class=""><i class="fas fa-caret-up text-success ml-1"></i>
																		6%</span> در ماه گذشته</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card shadow">
                                     <div class="card-body">
                                         <div class="widget text-center">
                                             <small class="">رشد فروش ماهیانه</small>
                                             <h2 class="text-xxl text-danger mb-1">12%</h2>
                                             <p class="mb-0"><span class=""><i class="fas fa-caret-down text-danger ml-1"></i>
																		8%</span> در ماه گذشته</p>
                                         </div>
                                     </div>
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
                                     <table class="table card-table table-dark table-vcenter text-nowrap  align-items-center">
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
     </div>



    @endsection

