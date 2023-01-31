<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">کوپون ها</a></li>
                <li class="breadcrumb-item active" aria-current="page">مدیریت کوپون ها</li>
            </ol>

        </div>

        {{--Createattr--}}

        <div class="row">
            <div class="col-md-12">

                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">افزودن کوپون</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <form wire:submit.prevent="store"  class="col-md-6">


                                <div>
                                    <div class="form-group">
                                        <label class="form-label">عنوان کوپون</label>
                                        <input wire:model.defer="code" type="text" class="form-control"
                                               placeholder="کد تخفیف">
                                        @error('code') <span class="error_validation">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">مقدار تخفیف</label>
                                        <input wire:model.defer="discount" type="text" class="form-control"
                                               placeholder="مقدار تخفیف به درصد محاسبه می شود">
                                        @error('discount') <span class="error_validation">{{ $message }}</span> @enderror
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
                                            <th>کد تخفیف</th>
                                            <th>درصد تخفیف</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($copouns as $copoun)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>
                                                    {{$copoun->code}}
                                                </td>

                                                <td>
                                                    {{$copoun->discount}}
                                                </td>


                                                <td>
                                                    <img wire:click="delete({{$copoun->id}})" class="img-fluid" style="cursor: pointer;" width="40" src="/admin/assets/img/icon/delete.png">

                                                    <div wire:loading wire:target="delete" >
                                                        @if($loading==$copoun->id)
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
            {{$copouns->links()}}
        </div>
    </div>

    @include('layouts.FlashMessage.CopounFlashMessage')

    {{--Editattr--}}
    {{-- @if($attrEdit==1)
         @livewire('admin.attr.edit')
     @endif--}}

</div>


