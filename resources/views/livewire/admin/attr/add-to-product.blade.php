<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">ویژگی ها</a></li>
                <li class="breadcrumb-item active" aria-current="page">افزودن ویژگی به محصول</li>
            </ol>

        </div>

        {{--CreateCategory--}}

        <div class="row">
            <div class="col-md-12">

                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">افزودن ویژگی به محصول</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <form wire:submit.prevent="store"  class="col-md-6">


                                <div>
                                    <div class="form-group">
                                        <label class="form-label">محصول</label>
                                        <select wire:model="productID" id="select-countries" class="form-control custom-select">
                                            <option value="">انتخاب کنید</option>
                                            @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->title}}</option>

                                            @endforeach
                                        </select>

                                        @error('productID') <span class="error_validation">{{ $message }}</span> @enderror

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">ویژگی ها</label>
                                        <select wire:model="attrID" id="select-countries" class="form-control custom-select">
                                            <option value="">بدون والد</option>
                                            @foreach($attrs as $attr)
                                                <option value="{{$attr->id}}">{{$attr->title}}</option>

                                            @endforeach
                                        </select>
                                        @error('attrID') <span class="error_validation">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">مقدار</label>
                                        <input wire:model.defer="value" type="text" class="form-control"
                                               placeholder="مقدار ویژگی">
                                        @error('value')
                                        <span class="error_validation">{{$message}}</span> @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">مبلغ</label>
                                        <input wire:model.defer="price" type="text" class="form-control"
                                               placeholder="هزینه ای که به سفارش اضافه می شود">
                                        @error('price') <span class="error_validation">{{ $message }}</span> @enderror
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
                        <h2 class=" mb-0">لیست  ویژگی های تخصیص یافته</h2>
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
                                            <th>نام محصول</th>
                                            <th>نام ویژگی</th>
                                            <th>مقدار ویژگی</th>
                                            <th>مبلغ</th>
                                            <th>بروزرسانی</th>
                                            <th>ذخیره ی بروزرسانی</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productsList as  $product)
                                          @foreach($productsList[0]->attr as $attr)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>
                                                    <span>{{$product->title}}</span>

                                                </td>
                                                <td>
                                                    <span>{{$attr->title}}</span>

                                                </td>
                                                <td>
                                                    <span>{{$attr->pivot->value}}</span>
                                                    @if($valueEdit==1 && $attr->id==$attrIDforEditForm)
                                                        <span> <input wire:model.defer="value" type="text" class="form-control"
                                                                      placeholder=""></span>
                                                    @endif




                                                </td>
                                                <td>
                                                    <span>{{$attr->pivot->price}}</span>
                                                    @if($priceEdit==1 && $attr->id==$attrIDforEditForm)
                                                        <span> <input wire:model.defer="price" type="text" class="form-control"
                                                                      placeholder=""></span>
                                                    @endif




                                                </td>
                                                <td>
                                                    <button wire:click="$emit('ShowEditFormAttrAddToProduct','active',{{$attr->id}})" type="button" class="btn btn-primary mt-1 mb-1" data-toggle="modal" data-target="#largeModal">
                                                        ویرایش
                                                    </button>
                                                </td>
                                                <td>

                                                    <img wire:click="update({{$product->id}},{{$attr->id}})" class="img-fluid" width="30" style="cursor: pointer;"
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
                                                    <img wire:click="delete({{$product->id}},{{$attr->id}},{{$attr->pivot->value}},{{$attr->pivot->price}})" class="img-fluid" style="cursor: pointer;" width="40" src="/admin/assets/img/icon/delete.png">

                                                    <div wire:loading wire:target="delete" >
                                                        @if($loading==$product->id)
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
            {{--{{$productsList->links()}}--}}
        </div>
    </div>

    @include('layouts.FlashMessage.AttrFlashMessage')

    {{--EditCat--}}
    {{-- @if($catEdit==1)
         @livewire('admin.category.edit')
     @endif--}}

</div>


