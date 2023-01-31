<div>
    {{--AddProduct--}}
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="#">محصولات</a></li>
            <li class="breadcrumb-item active" aria-current="page">مدیریت محصولات</li>
        </ol>

    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">افزودن محصولات</h2>
                </div>

                <div class="card-body">
                    <form wire:submit.prevent="store" class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="form-label">عنوان محصول</label>
                                <input wire:model.defer="title" type="text" class="form-control"
                                       placeholder="نام محصول">
                                @error('title') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">title</label>
                                <input wire:model.defer="en_title" type="text" class="form-control"
                                       placeholder="عنوان انگلیسی محصول">
                                @error('en_title') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">دسته بندی محصول</label>
                                <select wire:model.defer="category_id" id="select-countries"
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

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">قیمت پایه</label>
                                <input wire:model.defer="price" type="text" class="form-control"
                                       placeholder="قیمت">
                                @error('price') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">کلمات کلیدی</label>
                                <input wire:model.defer="keywords" type="text" class="form-control"
                                       placeholder="کلمات کلیدی">
                                @error('keywords') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">توضیحات</label>
                                <textarea wire:model.defer="description" class="form-control"></textarea>
                                @error('description') <span class="error_validation">{{ $message }}</span> @enderror
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

    {{--ProductList--}}
    {{--CategoryList --}}
    <?php
    $i = 1;
    ?>
    <div class="row">

        <div class="col-12">
            <div class="card shadow">
                <div class="card-header table-info border-0">
                    <h2 class=" mb-0">لیست محصولات</h2>
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
                                        <th>نام لاتین</th>
                                        <th>قیمت</th>
                                        <th>ویرایش</th>
                                        <th>افزودن عکس</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->en_title}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                <a href="{{route('product.edit',$product->id)}}">
                                                    <img width="35" class="img-fluid"
                                                         src="/admin/assets/img/icon/edit.png">
                                                </a>
                                            </td>
                                            <td>
                                                <button wire:click="$emit('upload',{{$product->id}})" type="button"
                                                        class="btn btn-primary mt-1 mb-1" data-toggle="modal"
                                                        data-target="#upload">
                                                    بارگزاری
                                                </button>
                                            </td>
                                            <td>
                                                <img wire:click="delete({{$product->id}})" style="cursor: pointer;"
                                                     width="35" class="img-fluid"
                                                     src="/admin/assets/img/icon/delete.png">
                                                <div wire:loading wire:target="delete">
                                                    @if($loading==$category->id)
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
        {{$products->links()}}
    </div>
    @include('layouts.FlashMessage.ProductFlashMessage')


    {{-- uploadFileModal--}}
    <style>
       .modal-body input{
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
    @if($upload==1)
        <div class="modal fade show" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             style="display: block; padding-right: 17px;">
          <form wire:submit.prevent="IMGupload({{$productIDforIMG}})" enctype="multipart/form-data">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">

                      <div class="modal-body">
                          <ul>
                              <li>
                                  <input wire:model.defer="photo" type="file"  />
                              </li>

                              <li>
                                  <input wire:model.defer="photo2" type="file"  />

                              </li>
                          </ul>

                          <div>

                          </div>

                      </div>
                      <footer class="row">
                          @error('photo') <span class="error_validation">{{ $message }}</span> @enderror
                          @error('photo2') <span class="error_validation">{{ $message }}</span> @enderror
                      </footer>
                      <div class="modal-footer">
                          <button wire:click="$emit('fadeUploadFile')" type="button" class="btn btn-secondary" data-dismiss="modal">لغو</button>
                          <button type="submit" class="btn btn-primary">اپلود</button>
                          <div wire:loading wire:target="IMGupload">

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

                          </div>
                      </div>
                  </div>
              </div>
          </form>

        </div>
    @endif
</div>
