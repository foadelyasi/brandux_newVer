@extends('layouts.admin')
@section('content')

    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="#">محصولات</a></li>
            <li class="breadcrumb-item active" aria-current="page">ویرایش</li>
        </ol>

    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">افزودن محصولات</h2>
                </div>

                <div class="card-body">
                    <form action="{{route('product.update',$product->id)}}" class="row">
                        @csrf
                        @method('PATCH')

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="form-label">عنوان محصول</label>
                                <input name="title" type="text" class="form-control"
                                       placeholder="نام محصول">
                                @error('title')
                                <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">دسته بندی محصول</label>
                                <select name="category_id" id="select-countries" class="form-control custom-select">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                        @if(count($category->childrenRecursive) >0)
                                            @include('Admin.category.partials',['categories'=>$category->childrenRecursive,'level'=>1,'create'=>1])
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">قیمت پایه</label>
                                <input name="price" type="text" class="form-control"
                                       placeholder="قیمت">
                                @error('price')
                                <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">کلمات کلیدی</label>
                                <input name="keywords" type="text" class="form-control"
                                       placeholder="کلمات کلیدی">
                                @error('keywords')
                                <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">توضیحات</label>
                                <textarea name="description" class="form-control"></textarea>
                                @error('description')
                                <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">عکس محصول</label>
                                <textarea name="description" class="form-control"></textarea>
                                @error('image')
                                <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>



                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mt-1 mb-1">بروز رسانی</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
