
<aside class="app-sidebar ">

   <style>
       .side-menu a{
           cursor: pointer;
       }
   </style>
    <div class="sidebar-img">
        <a class="navbar-brand" href="index-ldf-2.html"><img alt="..." class="navbar-brand-img main-logo"
                                                             src="/assets/img/brand/logolight1.png"> <img alt="..." class="navbar-brand-img logo"
                                                                                                          src="/assets/img/brand/logo.png"></a>
        <ul class="side-menu">
{{--  Admin--}}
      @if(auth()->user()->level=='admin')
            <li class="slide">
                <a class="side-menu__item active" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-home"></i><span
                        class="side-menu__label">داشبورد</span><i class="angle fa fa fa-angle-down"></i></a>

            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">کاربران
									</span><i class="angle fa fa fa-angle-down"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="{{route('user')}}"  class="slide-item">لیست کاربران</a>
                        <a href="{{route('role')}}"  class="slide-item">نقش ها</a>
                    </li>

                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">دسته بندی ها
									ها</span><i class="angle fa fa fa-angle-down"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="{{route('category')}}"  class="slide-item">مدیریت دسته بندی ها</a>
                    </li>

                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">مدیریت مطالب
									</span><i class="angle fa fa fa-angle-down"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="{{route('createArticle')}}"  class="slide-item">افزودن مطالب</a>
                    </li>
                    <li>
                        <a href="{{route('listArticle')}}"  class="slide-item">لیست مطالب</a>
                    </li>

                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">محصولات</span><i class="angle fa fa fa-angle-down"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="{{route('product')}}"  class="slide-item">مدیریت محصولات</a>
                    </li>

                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">کوپون ها</span><i class="angle fa fa fa-angle-down"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="{{route('coupon')}}"  class="slide-item">مدیریت مدیریت کوپون</a>
                    </li>

                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">ویژگی ها</span><i class="angle fa fa fa-angle-down"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="{{route('attr')}}"  class="slide-item">مدیریت ویژگی ها</a>
                    </li>
                    <li>
                        <a href="{{route('AddAttrToProduct')}}"  class="slide-item">افزودن ویژگی به محصول</a>
                    </li>


                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">نمونه کار ها</span><i class="angle fa fa fa-angle-down"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="{{route('Portfolio')}}"  class="slide-item">مدیریت نمونه کار</a>
                    </li>


                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">سفارشات</span><i class="angle fa fa fa-angle-down"></i></a>
                <ul class="slide-menu">

                    <li>
                        <a href="{{route('order')}}"  class="slide-item">لیست سفارشات</a>
                    </li>


                </ul>
            </li>
            @endif

{{--       OrdinaryUser       --}}

       @if(auth()->user()->level=='user')

            <li class="slide">
                <a class="side-menu__item active" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-home"></i><span
                        class="side-menu__label">داشبورد</span><i class="angle fa fa fa-angle-down"></i></a>

            </li>
            <li class="slide">
                <a class="side-menu__item active"  href="{{route('user.order')}}"><i
                        class="side-menu__icon fe fe-home"></i><span
                        class="side-menu__label">سفارشات شما</span></a>

            </li>

            <li class="slide">
                <a class="side-menu__item active" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-home"></i><span
                        class="side-menu__label">نظرات شما</span><i class="angle fa fa fa-angle-down"></i></a>

            </li>

            <li class="slide">
                <a class="side-menu__item active" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-home"></i><span
                        class="side-menu__label">خدمات سئو</span><i class="angle fa fa fa-angle-down"></i></a>

            </li>
            @endif
        </ul>
    </div>
</aside>

