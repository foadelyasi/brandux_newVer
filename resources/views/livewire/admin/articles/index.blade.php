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
                                                <img wire:click="edit({{$attr->id}})" class="img-fluid" width="30" style="cursor: pointer;"
                                                     src="/admin/assets/img/icon/edit.png">
                                            </td>
                                            <td>
                                                <img wire:click="delete({{$article->id}})" style="cursor: pointer;"
                                                     width="35" class="img-fluid"
                                                     src="/admin/assets/img/icon/delete.png">
                                                <div wire:loading wire:target="delete">
                                                    @if($loading==$article->id)
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
                                                    @endif
                                                </div>
                                            </td>
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
        @include('layouts.FlashMessage.ProductFlashMessage')
    </div>

</div>
