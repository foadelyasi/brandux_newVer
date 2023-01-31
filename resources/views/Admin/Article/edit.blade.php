@extends('layouts.admin')
@section('content')


    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="{{route('listArticle')}}">مطالب</a></li>
                <li class="breadcrumb-item active" aria-current="page">ویرایش مطالب</li>
            </ol>

        </div>

        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">افزودن مطلب</h2>
            </div>
            <div class="card-body">
                @if($m=session('update_article'))

                    <div class="alert alert-success" role="alert">
                        {{$m}}
                    </div>

                @endif
                <form action="{{route('update.article',$article->id)}}" method="post" class="row">

                    @csrf
                    @method('PATCH')

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">عنوان مطلب</label>
                            <input name="title" type="text" class="form-control" value="{{$article->title}}" placeholder="عنوان مطلب را بنویسید">
                            @error('title') <span class="error_validation">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">دسته بندی مطلب</label>
                            <select name="category_id" id="select-countries"
                                    class="form-control custom-select">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id==$article->category_id) selected @endif>{{$category->title}}</option>
                                    @if(count($category->childrenRecursive) >0)
                                        @include('layouts.partials',['categories'=>$category->childrenRecursive,'level'=>1,'create'=>1])
                                    @endif
                                @endforeach
                            </select>
                            @error('category_id') <span class="error_validation">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">کلمات کلیدی</label>
                            <input name="meta_keywords" type="text" class="form-control" value="{{unserialize($article->meta_keywords)}}" placeholder="کلمات کیلیدی را بنویسید">
                            @error('meta_keywords') <span class="error_validation">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">اسلاگ</label>
                            <input name="slug" type="text" class="form-control" value="{{$article->slug}}" >

                        </div>

                        <div class="form-group">
                            <label class="form-label">توضیحات </label>
                            <textarea name="meta_description"  class="form-control"  placeholder="چکیده ی مطلب">{{$article->meta_description}}</textarea>
                            @error('meta_description') <span class="error_validation">{{ $message }}</span> @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">متن اصلی</label>
                            <textarea name="description" id="editor1">
                              {{{$article->description}}}
                            </textarea>
                            @error('description') <span class="error_validation">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">تصویر اصلی</label>
                                <input name="image" type="file" class="form-control">
                                @error('image') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">تصویر پیشنمایش</label>
                                <input name="imagethumb" type="file" class="form-control">
                                @error('imagethumb') <span class="error_validation">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="/storage/upload/articles/{{$article->image}}">
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-1 mb-1">بروزرسانی</button>

                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection
