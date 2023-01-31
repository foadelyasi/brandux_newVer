<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">ویژگی ها</a></li>
                <li class="breadcrumb-item active" aria-current="page">مدیریت ویژگی ها</li>
            </ol>

        </div>

        {{--Createattr--}}

        <div class="row">
            <div class="col-md-12">

                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">افزودن ویژگی</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <form wire:submit.prevent="store"  class="col-md-6">


                                <div>
                                    <div class="form-group">
                                        <label class="form-label">عنوان ویژگی</label>
                                        <input wire:model.defer="title" type="text" class="form-control"
                                               placeholder="نام دسته بندی">
                                        @error('title') <span class="error_validation">{{ $message }}</span> @enderror
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



        {{--attrList --}}
        <?php
        $i = 1;
        ?>
        <div class="row">

            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header table-info border-0">
                        <h2 class=" mb-0">لیست ویژگی ها</h2>
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
                                            <th>تنظیمات</th>
                                            <th>ذخیره ی تنظیمات</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($attrs as $attr)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>
                                                    <span id="attr-{{$attr->id}}">{{$attr->title}}</span>
                                                    @if($attrEdit==1 && $attr->id==$attr->id)
                                                        <span> <input wire:model.defer="title" type="text" class="form-control"
                                                                      placeholder=""></span>
                                                    @endif


                                                </td>

                                                <td>
                                                    <button wire:click="$emit('ShowEditFormAttr','active',{{$attr->id}})" type="button" class="btn btn-primary mt-1 mb-1" data-toggle="modal" data-target="#largeModal">
                                                        ویرایش
                                                    </button>
                                                </td>
                                                <td>

                                                    <img wire:click="update({{$attr->id}})" class="img-fluid" width="30" style="cursor: pointer;"
                                                         src="/admin/assets/img/icon/edit.png">
                                                    <div wire:loading wire:target="update" >
                                                        @if($loading==$attr->id)
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
                                                    <img wire:click="delete({{$attr->id}})" class="img-fluid" style="cursor: pointer;" width="40" src="/admin/assets/img/icon/delete.png">

                                                    <div wire:loading wire:target="delete" >
                                                        @if($loading==$attr->id)
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
            {{$attrs->links()}}
        </div>
    </div>

    @include('layouts.FlashMessage.AttrFlashMessage')

    {{--Editattr--}}
    {{-- @if($attrEdit==1)
         @livewire('admin.attr.edit')
     @endif--}}

</div>


