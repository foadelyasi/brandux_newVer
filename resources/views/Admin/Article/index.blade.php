@extends('layouts.admin')
@section('content')

    <div>
        <div>
            <div class="page-header mt-0 shadow p-3">
                <ol class="breadcrumb mb-sm-0">
                    <li class="breadcrumb-item"><a href="#">مطالب</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ویرایش مطلب</li>
                </ol>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header bg-transparent border-0">
                            <h2 class=" mb-0">لیست مطالب</h2>
                        </div>

                        @if($m=session('delete_article'))

                            <div class="alert alert-danger" role="alert">
                                {{$m}}
                            </div>

                        @endif
                        <div class="">
                            <div class="grid-margin">
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap  align-items-center">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>ردیف</th>
                                                <th>عنوان مطلب</th>
                                                <th>دسته بندی</th>
                                                <th>ویرایش</th>
                                                <th>حذف</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($articles as $article)
                                                <tr>
                                                    <td>2345</td>
                                                    <td>{{$article->title}}</td>
                                                    <td>{{$article->category->title}}</td>
                                                    <td>
                                                        <a href="{{route('edit.article',$article->id)}}">
                                                            <img  class="img-fluid" width="30" style="cursor: pointer;"
                                                                 src="/admin/assets/img/icon/edit.png">
                                                        </a>

                                                    </td>
                                                    <td>
                                                        <form action="{{route('delete.article',$article->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-icon btn-pill btn-danger mt-1 mb-1" type="submit">
                                                                <span class="btn-inner--icon"><i class="fe fe-info"></i></span>
                                                            </button>
                                                        </form>


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
                {{$articles->links()}}
            </div>
            @include('layouts.FlashMessage.ArticleFlashMessage')
        </div>

    </div>



@endsection
