@section('title')
    <title>{{$title}}</title>
@endsection

@section('meta')
    <meta name="description" content=" {{$meta_description}}" />
@endsection


<div>
    <section class="position-relative">
        <div id="particles-js">
            <canvas class="particles-js-canvas-el" width="1898" height="315"
                    style="width: 100%; height: 100%;"></canvas>
        </div>
        <div class="container">
            <div class="row  text-center">
                <div class="col">
                    <h1>تک نوشته</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{url('/')}}">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a class="text-dark" href="{{route('articles')}}">بلاگ</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">تک نوشته</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>

    <div class="page-content">

        <!--blog start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Blog Card -->
                        <div class="card border-0 bg-transparent">
                            <div class="position-absolute bg-white shadow-primary text-center p-2 rounded mr-3 mt-3">
                                <br>{{$history}}</div>
                            <img class="card-img-top shadow rounded" src="/front/assets/images/blog/01.png" alt="Image">
                            <div class="card-body pt-5 px-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item pl-4"><a href="#" class="text-muted"><i
                                                class="ti-comments mr-1 text-primary"></i> 131</a>
                                    </li>
                                    <li class="list-inline-item pl-4"><a href="#" class="text-muted"><i
                                                class="ti-eye mr-1 text-primary"></i> 255</a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="text-muted"><i
                                                class="ti-comments mr-1 text-primary"></i> 14</a>
                                    </li>
                                </ul>
                                <h2 class="font-weight-medium">
                                    {{$title}}
                                </h2>
                                <p> {{$description}} </p>
                            </div>


                            <div class="d-md-flex justify-content-between mt-5 mb-5">
                                <div>
                                    <h6 class="mb-2">اشتراک: </h6>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i
                                                    class="la la-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i
                                                    class="la la-dribbble"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i
                                                    class="la la-instagram"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i
                                                    class="la la-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a class="text-dark ic-2x" href="#"><i
                                                    class="la la-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-md-right mt-5 mt-md-0">
                                    <h6 class="mb-2">برچسب ها: </h6>
                                    <ul class="list-inline">
                                        {{--                                        @foreach($meta_keywords as $keyword)--}}
                                        {{--                                        <li class="list-inline-item"><a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#">{{$keyword}}</a>--}}
                                        {{--                                        </li>--}}
                                        {{--                                        @endforeach--}}
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-5">
                                <div class="mb-8"> <span class="badge badge-primary-soft p-2">
                  <i class="la la-commenting ic-3x rotation"></i>
              </span>
                                    <h2 class="mt-3">همه نظرات</h2>
                                </div>
                                @foreach($comments as $comment)
                                    <div class="media d-block d-md-flex mt-5">
                                        <img class="img-fluid shadow rounded" alt="image"
                                             src="/front/assets/img/comments.png">
                                        <div class="media-body mx-0 mx-md-5 mx-lg-8 my-5 my-md-0">
                                            <div
                                                class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                                                <h6>{{$comment->username}}</h6>  <small
                                                    class="text-muted">{{\Morilog\Jalali\Jalalian::forge($comment->created_at)->format('%A, %d %B %y')}}</small>
                                            </div>
                                            <p>{{$comment->comment}}</p>
                                            @if($comment->id==$comment_id_for_reply)
                                                <div class="row">
                                                    <form wire:submit.prevent="saveReply({{$comment->id}})" id="contact-form" class="row"
                                                          novalidate="true">
                                                        <div class="messages"></div>
                                                        <div class="form-group col-sm-6 has-error has-danger">
                                                            <input wire:model.defer="username" id="form_name" type="text"
                                                                   class="form-control border-0 bg-light" placeholder="نام"
                                                                   required="required" data-error="فیلد نام ضروری است.">
                                                            <div class="help-block with-errors">
                                                                <ul class="list-unstyled">
                                                                    <li>فیلد نام ضروری است.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-0 col-sm-12 has-error has-danger">
                                        <textarea wire:model.defer="comment" id="form_message"
                                                  class="form-control border-0 bg-light h-100" placeholder="نظر شما"
                                                  rows="4" required="required"
                                                  data-error="لطفا پیام بگذارید."></textarea>
                                                            <div class="help-block with-errors">
                                                                <ul class="list-unstyled">
                                                                    <li>لطفا پیام بگذارید.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-primary mt-5">ارسال نظر</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                        <button wire:click="openReply({{$comment->id}})"
                                                class="align-items-center d-inline-block btn btn-primary align-self-center">
                                            <i class="ti-comments mr-2"></i> پاسخ
                                        </button>


                                    </div>
                                    @if($comment->reply())

                                        @foreach(\App\Models\Comment::where('parent_id',$comment->id)->get() as $reply)
                                            <div
                                                class="media d-block d-md-flex mt-8 ml-5 ml-md-8 bg-primary-soft rounded shadow p-5">
                                                <img class="img-fluid shadow rounded" alt="image"
                                                     src="/front/assets/img/reply.png">
                                                <div class="media-body mx-0 mx-md-5 mx-lg-8 my-5 my-md-0">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                                                        <h6>سارا دنکابرون</h6>  <small class="text-muted">{{\Morilog\Jalali\Jalalian::forge($reply->created_at)->format('%A, %d %B %y')}}
                                                        </small>
                                                    </div>
                                                    <p>
                                                        {{$reply->comment}}
                                                    </p>
                                                </div>
                                                <button wire:click="openReply({{$comment->id}})"
                                                        class="align-items-center d-inline-block btn btn-primary align-self-center">
                                                    <i class="ti-comments mr-2"></i> پاسخ
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif

                                @endforeach
                            </div>
                            <div class="post-comments mt-5">
                                <div class="mb-8"> <span class="badge badge-primary-soft p-2">
                  <i class="la la-commenting ic-3x rotation"></i>
              </span>
                                    <h2 class="mt-3">ارسال یک پیام</h2>
                                </div>
                                <form wire:submit.prevent="saveComment" id="contact-form" class="row"
                                       novalidate="true">
                                    <div class="messages"></div>
                                    <div class="form-group col-sm-6 has-error has-danger">
                                        <input wire:model.defer="username" id="form_name" type="text"
                                               class="form-control border-0 bg-light" placeholder="نام"
                                               required="required" data-error="فیلد نام ضروری است.">
                                        <div class="help-block with-errors">
                                            <ul class="list-unstyled">
                                                <li>فیلد نام ضروری است.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 col-sm-12 has-error has-danger">
                                        <textarea wire:model.defer="comment" id="form_message"
                                                  class="form-control border-0 bg-light h-100" placeholder="نظر شما"
                                                  rows="4" required="required"
                                                  data-error="لطفا پیام بگذارید."></textarea>
                                        <div class="help-block with-errors">
                                            <ul class="list-unstyled">
                                                <li>لطفا پیام بگذارید.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary mt-5">ارسال نظر</button>
                                    </div>
                                </form>
                            </div>
                            <div></div>
                        </div>
                        <!-- End Blog Card -->
                    </div>
                </div>
            </div>
        </section>

        <!--blog end-->

    </div>
    @include('layouts.FlashMessage.CommentFlashMessage')
</div>
