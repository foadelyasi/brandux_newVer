@extends('layouts.auth-admin')

@section('content')
    <div class="wrap-login100 p-5">




        <form action="{{route('do.login')}}" class="login100-form validate-form" method="post">
             @csrf
					<span class="login100-form-title">
						صفحه ورود
					</span>
            @if($m=session('unsuccessful_login'))
                <div class="row alert alert-danger">
                    <ul>
                        <li class="float-right">{{$m}}</li>
                    </ul>
                </div>


            @endif

            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input   class="input100" type="text" name="phone" placeholder="شماره ی همراه">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

                @error('email') <span style="font-size: 10pt;" class="float-right text-danger">{{ $message }}</span> @enderror
            </div>


            <div class="custom-control custom-checkbox mb-3 pr-0">
                <input  class="custom-control-input"   id="customCheck1" type="checkbox">
                <label class="custom-control-label pr-4" for="customCheck1">مرا به خاطر بسپار</label>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn btn-primary">
                    ورود
                </button>

            </div>

            <div class="text-center pt-2">
						<span class="txt1">
							فراموشی
						</span>
                <a class="txt2" href="">
                    نام کاربری / رمز عبور ؟
                </a>
            </div>

            <div class="text-center pt-1">
                <a class="txt2" href="{{route('register.view')}}">
                    ایجاد حساب کاربری
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>
    </div>
@endsection
