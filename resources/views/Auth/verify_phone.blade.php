@extends('layouts.auth-admin')
 @section('content')
    <div class="wrap-login100 p-5">




        <form action="{{route('do.verify')}}" method="post" class="login100-form validate-form">
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

            @if($m=session('send_code'))
                <div class="row alert alert-danger">
                    <ul>
                        <li class="float-right">{{$m}}</li>
                    </ul>
                </div>

            @endif

            @if($m=session('verify_code'))
                <div class="row alert alert-danger">
                    <ul>
                        <li class="float-right">{{$m}}</li>
                    </ul>
                </div>

            @endif


            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input  class="input100" type="password" name="code" placeholder="کد احراز">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

            </div>

            <div class="container-login100-form-btn">
                <a href="{{route('send.code')}}" class="login100-form-btn btn-warning">
                    ارسال مجدد کد
                </a>

            </div>
            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn btn-primary">
                    ورود
                </button>

            </div>


        </form>
    </div>

 @endsection
