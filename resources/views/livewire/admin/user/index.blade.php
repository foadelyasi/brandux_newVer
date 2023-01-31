<div>
    <div>
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">کاربران ها</a></li>
                <li class="breadcrumb-item active" aria-current="page">مدیریت کاربران ها</li>
            </ol>

        </div>

        {{--Createuser--}}

        <div class="row">
            <div class="col-md-12">

                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">افزودن کاربران</h2>
                    </div>

                    <div class="card-body">
                        <form  wire:submit.prevent="store" class="row">
                            <div  class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">نام</label>
                                        <input wire:model.defer="name" type="text" class="form-control"
                                               placeholder="نام کاربر">
                                        @error('name') <span class="error_validation">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">شماره همراه</label>
                                        <input wire:model.defer="phone" type="text" class="form-control"
                                               placeholder="شماره ی همراه">
                                        @error('phone') <span class="error_validation">{{ $message }}</span> @enderror
                                    </div>


                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label class="form-label">ایمیل</label>
                                       <input wire:model.defer="email" type="email" class="form-control"
                                              placeholder="ایمیل">
                                       @error('email') <span class="error_validation">{{ $message }}</span> @enderror
                                   </div>

                                   <div class="form-group">
                                       <label class="form-label">نقش</label>
                                       <select wire:model.debounce.500ms="role">
                                           <option>نقش کاربر را انتخاب کنید</option>
                                           @foreach($roles as $role)
                                               <option>
                                                   {{$role->title}}
                                               </option>
                                           @endforeach
                                       </select>
                                       @error('role') <span class="error_validation">{{ $message }}</span> @enderror
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>



        {{--userList --}}
            <?php
            $i = 1;
            ?>
        <div class="row">

            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header table-info border-0">
                        <h2 class=" mb-0">لیست کاربران ها</h2>
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
                                            <th>نام کاربر</th>
                                            <th>شماره همراه</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>
                                                    <span>{{$user->name}}</span>
                                                </td>

                                                <td>
                                                    <span>{{$user->phone}}</span>
                                                </td>
                                                <td>

                                                    <img wire:click="edit({{$user->id}})" class="img-fluid" width="30" style="cursor: pointer;"
                                                         src="/admin/assets/img/icon/edit.png">



                                                </td>

                                                <td>
                                                    <img wire:click="delete({{$user->id}})" class="img-fluid" style="cursor: pointer;" width="40" src="/admin/assets/img/icon/delete.png">

                                                    <div wire:loading wire:target="delete" >
                                                        @if($loading==$user->id)
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
            {{$users->links()}}
        </div>
    </div>

    @include('layouts.FlashMessage.UserFlashMessage')

    {{--Edituser--}}
    {{-- @if($userEdit==1)
         @livewire('admin.user.edit')
     @endif--}}

</div>


