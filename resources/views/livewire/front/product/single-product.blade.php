
@section('title')
    <title>{{$title}}</title>
@endsection

@section('meta')
    <meta name="description" content=" {{$title}}" />
    <meta name="keywords" content="{{$keywords}}" />
@endsection


<div>

    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        /* Styling h1 and links
        ––––––––––––––––––––––––––––––––– */



        .starrating > input {display: none;}  /* Remove radio buttons */

        .starrating > label:before {
            content: "\f005"; /* Star */
            margin: 2px;
            font-size: 2em;
            font-family: FontAwesome;
            display: inline-block;
        }

        .starrating > label
        {
            color: #222222; /* Start color when not clicked */
        }

        .starrating > input:checked ~ label
        { color: #ffca08 ; } /* Set yellow color when star checked */

        .starrating > input:hover ~ label
        { color: #ffca08 ;  } /* Set yellow color when star hover */

    </style>
    <section class="position-relative">
        <div id="particles-js"><canvas class="particles-js-canvas-el" width="1898" height="315" style="width: 100%; height: 100%;"></canvas></div>
        <div class="container">
            <div class="row  text-center">
                <div class="col">
                    <h1>تک محصول</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{route('welcome')}}">خانه</a>
                            </li>
                            <li class="breadcrumb-item">فروشگاه</li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">تک محصول</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


    <div class="page-content">
        <style>
            #imageGallery li img {

            }

            .lSPager {
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
        </style>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="lSSlideOuter lSrtl">
                            <div class="lSSlideWrapper usingCss">
                                <ul id="imageGallery" class="lightSlider lsGrab lSSlide"
                                    style="width: 2160px; height: 613.633px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">

                                    <li data-thumb="/storage/upload/products/{{$product->image}}"
                                        data-src="/storage/upload/products/{{$product->image}}" class="lslide active"
                                        style="width: 540px; margin-left: 0px;">
                                        <img class="img-fluid w-100" src="/storage/upload/products/{{$product->image}}"
                                             alt="">
                                    </li>

                                    <li data-thumb="/storage/upload/products/{{$product->image2}}"
                                        data-src="/storage/upload/products/{{$product->image2}}" class="lslide"
                                        style="width: 540px; margin-left: 0px;">
                                        <img class="img-fluid w-100" src="/storage/upload/products/{{$product->image2}}"
                                             alt="">
                                    </li>

                                </ul>
                                <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
                            </div>

                        </div>

                        {{-- <div class="xzoom-container">
                             <img class="xzoom" id="xzoom-default" src="/storage/upload/products/{{$product->image}}" xoriginal="/storage/upload/products/{{$product->image}}" style="width: 400px;" title="The description goes here">
                             <div class="xzoom-thumbs">
                                 <img class="xzoom-gallery" src="/storage/upload/products/{{$product->image}}" xpreview="/storage/upload/products/{{$product->image}}" title="The description goes here" width="80">
                                 <img class="xzoom-gallery" src="/storage/upload/products/{{$product->image2}}" xpreview="/storage/upload/products/{{$product->image2}}" title="The description goes here" width="80">

                             </div>
                         </div>--}}
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
                        <div class="product-details">
                            <h4>
                                {{$product->title}}
                            </h4>
                            <div class="product-price my-4"><span class="d-block"> {{$totalPrice}} تومان</span>
                                <span class="text-primary">
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                    </span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><span class="text-black"> موجود: </span> در انبار</li>
                                <li><span class="text-black"> دسته بندی :</span> زنانه</li>
                            </ul>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است.</p>
                            <div class="row my-4">
                             @foreach($properties as $prop)

                                <div class="col-lg-4 col-sm-6 mt-3">
                                    <h6 class="mb-2 text-black">{{$prop->attr_name}}</h6>
                                    <select id="attr_{{$prop->id}}" wire:model.debounce.500ms="price.{{$prop->id}}" class="custom-select shadow-none">
                                        <option>انتخاب کنید</option>
                                         @foreach(unserialize($prop->value_price) as $value)
                                        <option   value="{{$value['price']}},{{$value['value']}},{{$prop->attr_name}}">{{$value['value']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach


                            </div>

                            <style>
                                .loader{
                                    position: static !important;
                                }
                            </style>


                            <div class="d-flex align-items-center mt-5">
                                <button wire:click="totalPrice" class="btn btn-primary ml-4"><i class="ti-bag mr-2"></i>محاسبه ی هزینه </button>
                                <div wire:loading wire:target="totalPrice" >
                                    <div class="loader-wrapper d-flex justify-content-center align-items-center"><div class="loader">
                                            <div class="ball-pulse"><div>
                                                </div>
                                                <div>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <a class="wishlist-btn" href="#"> <i class="ti-heart"></i>
                                    </a>
                                </div>
                                @if(session('nullAttr'))
                                    <div class="alert alert-danger" role="alert">
                                        لطفا تمام ویژگی ها را انتخاب کنید
                                    </div>
                                @else
                                    <div class="alert alert-success" role="alert">
                                        @if($totalPrice!=$product->price)
                                      تومان  {{$totalPrice}}
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="d-flex align-items-center mt-5">
                                <button wire:click="addToBasket({{$product->id}})" class="btn btn-success ml-4"><i class="ti-bag mr-2"></i>افزودن به سبد</button>
                                <div  wire:loading wire:target="addToBasket">
                                    <div class="loader-wrapper d-flex justify-content-center align-items-center"><div class="loader">
                                            <div class="ball-pulse"><div>
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
                </div>
            </div>
        </section>

        <!--tab start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab">
                            <!-- Nav tabs -->
                            <nav>
                                <div class="nav nav-tabs border-0" id="nav-tab" role="tablist"><a
                                        class="nav-item nav-link active ml-0" id="nav-tab1" data-toggle="tab"
                                        href="#tab3-1" role="tab" aria-selected="true">توضیحات</a>
                                    <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab3-2"
                                       role="tab" aria-selected="false">اطلاعات اضافی</a>
                                    <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab3-3"
                                       role="tab" aria-selected="false">نظر (2)</a>
                                </div>
                            </nav>
                            <!-- Tab panes -->
                            <div class="tab-content pt-5">
                                <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
                                    <h5 class="mb-3">توضیحات محصول</h5>
                                    <p class="mb-0">
                                      {{$product->description}}
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3-2">
                                    <h5 class="mb-3">اطلاعات اضافی</h5>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3-3">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="row total-rating">
                                                <div class="col-md-6">
                                                    <div class="bg-light shadow-sm text-center p-5">
                                                        <h5>به طور کلی</h5>
                                                        <h4>4.0</h4>
                                                        <h6>(03 نظر)</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-3 mt-lg-0">
                                                    <div class="rating-list">
                                                        <h5>بر اساس 3 رای</h5>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">5 ستاره
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i> 01</a>
                                                            </li>
                                                            <li><a href="#">4 ستاره
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i> 01</a>
                                                            </li>
                                                            <li><a href="#">3 ستاره
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i> 01</a>
                                                            </li>
                                                            <li><a href="#">2 ستاره
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i> 01</a>
                                                            </li>
                                                            <li><a href="#">1 ستاره
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i>
                                                                    <i class="ti-star"></i> 01</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-holder review-list mt-5">
                                                <div class="media d-sm-flex d-block">
                                                    <img class="img-fluid shadow rounded ml-sm-3 mb-3 mb-sm-0"
                                                         alt="image" src="assets/images/thumbnail/01.jpg">
                                                    <div class="media-body">
                                                        <h6>سارا دنکابرون</h6>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                            با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با
                                                            تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                                            گرافیک است..</p> <span class="text-primary">
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                    </span>
                                                    </div>
                                                </div>
                                                <div class="media d-sm-flex d-block mt-5">
                                                    <img class="img-fluid shadow rounded ml-sm-3 mb-3 mb-sm-0"
                                                         alt="image" src="assets/images/thumbnail/02.jpg">
                                                    <div class="media-body">
                                                        <h6>بین میلر</h6>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                            با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با
                                                            تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                                            گرافیک است..</p> <span class="text-primary">
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                    </span>
                                                    </div>
                                                </div>
                                                <div class="media d-sm-flex d-block mt-5">
                                                    <img class="img-fluid shadow rounded ml-sm-3 mb-3 mb-sm-0"
                                                         alt="image" src="assets/images/thumbnail/03.jpg">
                                                    <div class="media-body">
                                                        <h6> میلر جان</h6>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                            با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با
                                                            تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                                            گرافیک است..</p> <span class="text-primary">
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form wire:submit.prevent="saveComment" class="col-md-5">
                                            <div class="post-comments mt-5 pos-r">
                                                <div class="section-title mb-3">
                                                    <h5>افزودن نظر</h5>
                                                </div>
                                                <form id="contact-form" method="post"
                                                      action="http://themeht.com/bootsland/rtl/contact.php"
                                                      novalidate="true">
                                                    <div class="messages"></div>
                                                    <div class="form-group">
                                                        <input wire:model.defer="username" id="form_name" type="text"
                                                               class="form-control" placeholder="نام"
                                                               required="required" data-error="فیلد نام ضروری است.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group">
                                                        <textarea wire:model.defer="comment" id="form_message" name="message" class="form-control"
                                                                  placeholder="نوع نظر" rows="4" required="required"
                                                                  data-error="لطفا پیام بگذارید."></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <ul style="width: 100%;">
                                                              <li class="mb-4">بهمون چندتا ستاره میدی </li>
                                                          </ul>
                                                      </div>
                                                     <div class="col-md-6">
                                                         <div class="container">
                                                             <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                                                 <input  wire:click="$emit('rating',5)" type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star">5</label>
                                                                 <input  wire:click="$emit('rating',4)" type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star">4</label>
                                                                 <input  wire:click="$emit('rating',3)" type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star">3</label>
                                                                 <input  wire:click="$emit('rating',2)" type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star">2</label>
                                                                 <input  wire:click="$emit('rating',1)" type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star">1</label>
                                                             </div>
                                                         </div>

                                                     </div>


                                                    </div>

                                                    <button class="btn btn-primary mt-3">ارسال نظر</button>
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--tab end-->

    </div>


    @include('layouts.FlashMessage.ProductCommentFlashMessage')

</div>
