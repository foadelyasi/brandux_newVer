<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">دسته بندی ها</a></li>
                <li class="breadcrumb-item active" aria-current="page">مدیریت دسته بندی</li>
            </ol>

        </div>

     {{--CreateCategory--}}

        <div class="row">
            <div class="col-md-12">

                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">افزودن دسته بندی</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <form wire:submit.prevent="store"  class="col-md-6">


                                <div>
                                    <div class="form-group">
                                        <label class="form-label">عنوان دسته بندی</label>
                                        <input wire:model.defer="title" type="text" class="form-control"
                                               placeholder="نام دسته بندی">

                                        @error('title') <span class="error_validation">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">title</label>
                                        <input wire:model.defer="en_title" type="text" class="form-control"
                                                placeholder="عنوان انگلیسی دسته بندی">
                                        @error('en_title') <span class="error_validation">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">دسته بندی والد</label>
                                        <select wire:model.defer="parent" id="select-countries" class="form-control custom-select">
                                            <option value="">بدون والد</option>
                                            @foreach($categoriesCreate as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                                @if(count($category->childrenRecursive) >0)
                                                    @include('layouts.partials',['categories'=>$category->childrenRecursive,'level'=>1,'create'=>1])
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mt-1 mb-1">افزودن</button>
                                    <div wire:loading wire:target="store" >
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


                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



     {{--CategoryList --}}
        <?php
        $i = 1;
        ?>
        <div class="row">

            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header table-info border-0">
                        <h2 class=" mb-0">لیست دسته بندی ها</h2>
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
                                            <th>نام دسته بندی</th>
                                            <th>نام لاتین</th>
                                            <th>تنظیمات</th>
                                            <th>ذخیره ی تنظیمات</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>
                                                    <span id="cat-{{$category->id}}">{{$category->title}}</span>
                                                    @if($catEdit==1 && $cat==$category->id)
                                                        <span> <input wire:model.defer="title" type="text" class="form-control"
                                                                      placeholder=""></span>
                                                    @endif


                                                </td>
                                                <td>
                                                    <span id="cat-{{$category->id}}">{{$category->en_title}}</span>
                                                    @if($catEdit==1 && $cat==$category->id)
                                                        <span> <input wire:model.defer="en_title" type="text" class="form-control"
                                                                      placeholder=""></span>
                                                    @endif

                                                </td>
                                                <td>
                                                    <img wire:click="$emit('editCat',{{$category->id}})" style="cursor: pointer;" width="35" class="img-fluid"
                                                         src="/admin/assets/img/icon/edit.png">
                                                </td>
                                                <td>

                                                        <img wire:click="update({{$category->id}})" class="img-fluid" width="30" style="cursor: pointer;"
                                                             src="/admin/assets/img/icon/edit.png">
                                                    <div wire:loading wire:target="update" >
                                                      @if($loading==$category->id)
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
                                                      @endif
                                                    </div>


                                                </td>

                                                <td>
                                                    <img wire:click="delete({{$category->id}})" class="img-fluid" style="cursor: pointer;" width="40" src="/admin/assets/img/icon/delete.png">

                                                    <div wire:loading wire:target="delete" >
                                                        @if($loading==$category->id)
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
                                                        @endif
                                                    </div>

                                                </td>
                                            </tr>
                                            @if(count($category->childrenRecursive) >0)
                                                @include('layouts.partials',['categories'=>$category->childrenRecursive,'level'=>1,'index'=>1])
                                            @endif

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
            {{$categories->links()}}
        </div>
    </div>

    @include('layouts.FlashMessage.CategoryFlashMessage')

    {{--EditCat--}}
{{--    @if($catEdit==1)--}}
{{--        @livewire('admin.category.edit')--}}
{{--    @endif--}}

        </div>


