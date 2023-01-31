<div>
    <div class="wrap-login100 p-5">
        <form wire:submit.prevent="update" class="login100-form validate-form">
					<span class="login100-form-title">
						 فراموشی رمز عبور
					</span>
            <div class="wrap-input100 validate-input" >
                <input wire:model.lazy="email" class="input100" type="text"  placeholder="ایمیل">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fas fa-envelope" aria-hidden="true"></i>
						</span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input wire:model.lazy="password" class="input100" type="password"  placeholder="رمز عبور جدید">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fas fa-lock" aria-hidden="true"></i>
						</span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input  wire:model.lazy="ConfirmPassword" class="input100" type="password"  placeholder="تکرار رمز عبور جدید">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fas fa-lock" aria-hidden="true"></i>
						</span>
            </div>
            <div class="container-login100-form-btn">
                <a href="#" class="login100-form-btn btn-primary">
                    تایید
                </a>
            </div>
            <div class="text-center pt-2">
						<span class="txt1">
							بازگشت به
						</span>
                <a class="txt2" href="login.html">
                    صفحه ورود
                </a>
            </div>
        </form>
    </div>
</div>
