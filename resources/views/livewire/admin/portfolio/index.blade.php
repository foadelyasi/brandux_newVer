<div>
    <style>
        .file_input{
            display: inline-block;
            background-color: indigo;
            color: white;
            padding: 0.5rem;
            font-family: sans-serif;
            border-radius: 0.3rem;
            cursor: pointer;
            margin-top: 1rem;
        }
    </style>
    {{--Addportfolio--}}
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="#">نمونه کار</a></li>
            <li class="breadcrumb-item active" aria-current="page">مدیریت نمونه کار</li>
        </ol>

    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">افزودن نمونه کار</h2>
                </div>

                <div class="card-body">
                    <form wire:submit.prevent="store" enctype="multipart/form-data" class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="form-label">عنوان نمونه کار</label>
                                <input wire:model.defer="title" type="text" class="form-control"
                                       placeholder="عنوان نمونه کار ">
                                @error('title') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">دسته بندی</label>
                                <select wire:model="category_id" id="select-countries"
                                        class="form-control custom-select">
                                    @foreach($categories as $category)
                                        <option wire:click="$emit('category_id',{{$category->id}})"
                                                value="{{$category->id}}">{{$category->title}}</option>
                                        @if(count($category->childrenRecursive) >0)
                                            @include('layouts.partials',['categories'=>$category->childrenRecursive,'level'=>1,'create'=>1])
                                        @endif
                                    @endforeach
                                </select>
                                @error('category_id') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">توضیحات</label>
                                <textarea wire:model.defer="description" class="form-control"></textarea>
                                @error('description') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">ساخته شده با :</label>
                                <textarea wire:model.defer="made_by" class="form-control"></textarea>
                                @error('made_by') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="form-label">عکس اصلی</label>
                                <input wire:model.defer="image1" class="form-control file_input" type="file">
                                @error('image1') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">عکس دوم</label>
                                <input wire:model.defer="image2" class="form-control file_input" type="file">
                                @error('image2') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">عکس سوم (اختیاری )</label>
                                <input wire:model.defer="image3" class="form-control file_input" type="file">
                                @error('image3') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>


                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mt-1 mb-1">افزودن</button>
                            <div wire:loading wire:target="store">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
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

                    </form>
                </div>
            </div>
        </div>

    </div>

    {{--portfolioList--}}
    {{--CategoryList --}}
    <?php
    $i = 1;
    ?>
    <div class="row">

        <div class="col-12">
            <div class="card shadow">
                <div class="card-header table-info border-0">
                    <h2 class=" mb-0">لیست نمونه کار ها</h2>
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
                                        <th>ساخته شده با :</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($portfolios as $portfolio)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$portfolio->title}}</td>
                                            <td>{{$portfolio->made_by}}</td>
                                            <td>
                                                    <img wire:click="edit({{$portfolio->id}})" width="35" class="img-fluid" style="cursor:pointer;"
                                                         src="/admin/assets/img/icon/edit.png">
                                            </td>

                                            <td>
                                                <img wire:click="delete({{$portfolio->id}})" style="cursor: pointer;"
                                                     width="35" class="img-fluid"
                                                     src="/admin/assets/img/icon/delete.png">
                                                <div wire:loading wire:target="delete">
                                                    @if($loading==$portfolio->id)
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
        {{$portfolios->links()}}
    </div>
    @include('layouts.FlashMessage.portfolioFlashMessage')


    {{-- uploadFileModal--}}


</div>
