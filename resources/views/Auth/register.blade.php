@extends('layouts.auth-admin')
@section('content')
<div>

    <div class="wrap-login100 p-5">

        <form action="{{route('do.register')}}" method="post" class="login100-form validate-form">
            @csrf
                    <span class="login100-form-title">
                        صفحه ثبت نام
                    </span>

            <div class="wrap-input100 validate-input" >
                <input  class="input100"  name="name" placeholder="نام">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                @error('name') <span style="font-size: 10pt;" class="float-right text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="wrap-input100 validate-input">
                <input  class="input100" type="text" name="phone" placeholder="شماره همراه">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                @error('phone') <span style="font-size: 10pt;" class="float-right text-danger">{{ $message }}</span> @enderror
            </div>



            <div class="container-login100-form-btn">
                <button type="submit" href="index-ldf-2.html" class="login100-form-btn btn-primary">
                    ثبت نام
                </button>

               {{-- <div>
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


            <div class="text-center pt-1">
                <a class="txt2" href="">
                    ورود به حساب
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>
    </div>

</div>
@endsection
