<footer class="py-11 bg-primary position-relative" data-bg-img="assets/images/bg/03.png">
    <div class="shape-1" style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 271.49,-50.00 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>
    <div class="container mt-11">
        <div class="row">
            <div class="col-12 col-lg-5 col-xl-4 ml-auto mb-6 mb-lg-0">
                <div class="subscribe-form bg-warning-soft p-5 rounded">
                    <h5 class="mb-4 text-white">خبرنامه</h5>
                    <h6 class="text-light">عضویت در خبرنامه ما</h6>
                    <form id="mc-form" class="group">
                        <input type="email" value="" name="EMAIL" class="email form-control" id="mc-email" placeholder="آدرس ایمیل" required="" style="height: 60px;">
                        <input class="btn btn-outline-light btn-block mt-3 mb-2" type="submit" name="subscribe" value="عضویت">
                    </form> <small class="text-light">با عضویت رایگان، یک ماه بروز باشید.</small>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row">
                    <div class="col-12 col-sm-4 navbar-dark">
                        <h5 class="mb-4 text-white">آشنایی بیشتر </h5>
                        <ul class="navbar-nav list-unstyled mb-0">
                            <li class="mb-3 nav-item"><a class="nav-link" href="/front/about-us-1.html">درباره ما</a>
                            </li>
                            <li class="mb-3 nav-item"><a class="nav-link" href="/front/product-grid.html">تماس با ما</a>
                            </li>
                            <li class="mb-3 nav-item"><a class="nav-link" href="/front/faq.html">سوالات متداول</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-12 col-sm-4 mt-6 mt-sm-0 navbar-dark">
                        <h5 class="mb-4 text-white">خدمات</h5>
                        <ul class="navbar-nav list-unstyled mb-0">
                            <li class="mb-3 nav-item"><a class="nav-link" href="/front/#">طراحی سایت</a>
                            </li>
                            <li class="mb-3 nav-item"><a class="nav-link" href="/front/#">تولید محتوا</a>
                            </li>
                            <li class="mb-3 nav-item"><a class="nav-link" href="/front/login.html">مشاوره تبلیغاتی</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-4 mt-6 mt-sm-0 navbar-dark">
                        <h5 class="mb-4 text-white">قوانین</h5>
                        <ul class="navbar-nav list-unstyled mb-0">
                            <li class="mb-3 nav-item"><a class="nav-link" href="/front/terms-and-conditions.html">شرایط سایت</a>
                            </li>
                            <li class="mb-3 nav-item"><a class="nav-link" href="/front/privacy-policy.html">حریم خصوصی</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/front/#">پشتیبانی</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-sm-6">
                        <a class="footer-logo text-white h2 mb-0" href="/front/index.html">
                            برند<span class="font-weight-bold">اکس</span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 mt-6 mt-sm-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a class="text-light ic-2x" href="/front/#"><i class="la la-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="text-light ic-2x" href="/front/#"><i class="la la-dribbble"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="text-light ic-2x" href="/front/#"><i class="la la-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="text-light ic-2x" href="/front/#"><i class="la la-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="text-light ic-2x" href="/front/#"><i class="la la-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-white text-center mt-8">
            <div class="col">
                <hr class="mb-8">کپی رایت - کلیه حقوق محفوظ است 1401 <u><a class="text-white" href="/front/#">برنداکس</a></u> | همیشه در خدمت شماست</div>
        </div>
    </div>
</footer>

<!--footer end-->

</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="/front/#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->

<script src="/front/assets/js/theme-plugin.js"></script>
<script src="/front/assets/js/theme-script.js"></script>
<script src="/front/assets/js/xzoom.js"></script>
<script src="/admin/assets/plugins/sweet-alert/sweetalert.min.js"></script>


<script>
    $(".xzoom").xzoom({tint: '#333', Xoffset: 15});
</script>



<script>


    jQuery(document).ready(function($){

        $(".btnrating").on('click',(function(e) {

            var previous_value = $("#selected_rating").val();

            var selected_value = $(this).attr("data-attr");
            $("#selected_rating").val(selected_value);

            $(".selected-rating").empty();
            $(".selected-rating").html(selected_value);

            for (i = 1; i <= selected_value; ++i) {
                $("#rating-star-"+i).toggleClass('btn-warning');
                $("#rating-star-"+i).toggleClass('btn-default');
            }

            for (ix = 1; ix <= previous_value; ++ix) {
                $("#rating-star-"+ix).toggleClass('btn-warning');
                $("#rating-star-"+ix).toggleClass('btn-default');
            }

        }));


    });
</script>
@livewireScripts
<!-- inject js end -->

</body>


</html>
