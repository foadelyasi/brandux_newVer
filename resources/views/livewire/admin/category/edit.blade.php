<div>

    <div  class="modal fade show" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="largeModalLabel">عنوان مدال</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card shadow">
                                <div class="card-header">
                                    <h2 class="mb-0">ویرایش</h2>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <form wire:submit.prevent="update({{$cat->id}})"  class="col-md-6">


                                            <div>
                                                <div class="form-group">
                                                    <label class="form-label">عنوان دسته بندی</label>
                                                    <input wire:model.defer="title" type="text" class="form-control"
                                                           placeholder="{{$cat->title}}" value="{{$cat->title}}">
                                                    @error('title')
                                                    <div class="invalid-feedback">{{$message}}</div> @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">title</label>
                                                    <input wire:model.defer="en_title" type="text" class="form-control"
                                                           placeholder="{{$cat->en_title}}" value="{{$cat->en_title}}">
                                                    @error('en_title')
                                                    <div class="invalid-feedback">{{$message}}</div> @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">دسته بندی والد</label>
                                                    <select wire:model.defer="parent" id="select-countries" class="form-control custom-select">
                                                        <option value="">بدون والد</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}"
                                                                    @if($cat->id==$category->id) selected @endif>{{$category->title}}</option>
                                                            @if(count($category->childrenRecursive) >0)
                                                                @include('livewire.category.partials',['categories'=>$category->childrenRecursive,'level'=>1,'cat'=>$cat->id,'edit'=>1])
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>


                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success mt-1 mb-1">بروزرسانی</button>
                                                {{--<div wire:loading wire:target="store" >
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
                                                </div>--}}

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button wire:click="$emit('ShowEditForm','cancel')" type="button" class="btn btn-danger">لغو</button>
                </div>
            </div>
        </div>
    </div>

</div>


