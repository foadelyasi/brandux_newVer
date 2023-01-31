<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">مدیریت کاریران</a></li>
                <li class="breadcrumb-item active" aria-current="page">نقش ها</li>
            </ol>

        </div>

        {{--Createrole--}}

        <div class="row">
            <div class="col-md-12">

                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">افزودن نقش</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <form wire:submit.prevent="store"  class="col-md-6">


                                <div>
                                    <div class="form-group">
                                        <label class="form-label">عنوان نقش</label>
                                        <input wire:model.defer="title" type="text" class="form-control"
                                               placeholder="نام نقش">
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



        {{--roleList --}}
            <?php
            $i = 1;
            ?>
        <div class="row">

            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header table-info border-0">
                        <h2 class=" mb-0">لیست نقش ها</h2>
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
                                            <th>نام نقش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($roles as $role)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>
                                                    <span>{{$role->title}}</span>

                                                </td>

                                                <td>
                                                    <img wire:click="delete({{$role->id}})" class="img-fluid" style="cursor: pointer;" width="40" src="/admin/assets/img/icon/delete.png">

                                                    <div wire:loading wire:target="delete" >
                                                        @if($loading==$role->id)
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
            {{$roles->links()}}
        </div>
    </div>

    @include('layouts.FlashMessage.roleFlashMessage')

    {{--Editrole--}}
    {{-- @if($roleEdit==1)
         @livewire('admin.role.edit')
     @endif--}}

</div>


