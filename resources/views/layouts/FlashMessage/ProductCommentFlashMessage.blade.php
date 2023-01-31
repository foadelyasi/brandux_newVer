
@if(session('addToBasket'))
    <div class="sweet-overlay" tabindex="-1" style="opacity: 1.28; display: block;"></div>

    <div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: block; margin-top: -172px;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
        </div><div class="sa-icon sa-warning pulseWarning" style="display: block;">
            <span class="sa-body pulseWarningIns"></span>
            <span class="sa-dot pulseWarningIns"></span>
        </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success" style="display: none;">
            <span class="sa-line sa-tip"></span>
            <span class="sa-line sa-long"></span>

            <div class="sa-placeholder"></div>
            <div class="sa-fix"></div>
        </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>لطفا وارد حساب کاربری خود شوید</h2>
        <p style="display: block;">برای خرید محصولات و پیگیری سفارشاتت بهتره یه حساب کاربری داشته باشی</p>
        <fieldset>
            <input type="text" tabindex="3" placeholder="">
            <div class="sa-input-error"></div>
        </fieldset><div class="sa-error-container">
            <div class="icon">!</div>
            <p>Not valid!</p>
        </div><div class="sa-button-container">
            <button wire:click="$emit('account','login')" class="cancel" tabindex="2" style="display: inline-block; box-shadow: none;">ورود</button>
            <div class="sa-confirm-button-container">
                <button wire:click="$emit('account','register')" class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(140, 212, 245); box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">ثبت نام</button><div class="la-ball-fall">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div></div>
@endif

@if(session('rating'))
    <div class="sweet-overlay" tabindex="-1" style="opacity: 1.28; display: block;"></div>

    <div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: block; margin-top: -172px;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
        </div><div class="sa-icon sa-warning pulseWarning" style="display: block;">
            <span class="sa-body pulseWarningIns"></span>
            <span class="sa-dot pulseWarningIns"></span>
        </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success" style="display: none;">
            <span class="sa-line sa-tip"></span>
            <span class="sa-line sa-long"></span>

            <div class="sa-placeholder"></div>
            <div class="sa-fix"></div>
        </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>میشه ستاره هارو خالی نذاری ؟</h2>
        <p style="display: block;">یه ستارم بهمون بدی ما قبولت داریم ستون </p>
        <fieldset>
            <input type="text" tabindex="3" placeholder="">
            <div class="sa-input-error"></div>
        </fieldset><div class="sa-error-container">
            <div class="icon">!</div>
            <p>Not valid!</p>
        </div><div class="sa-confirm-button-container">
            <button wire:click="$emit('forgotRatingSession')" class="cancel" tabindex="2" style="display: inline-block; box-shadow: none;">باشه</button>
        </div></div>
@endif


@if(session('add_comment'))
    <div class="sweet-overlay" tabindex="-1" style="opacity: 1.28; display: block;"></div>

    <div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: block; margin-top: -172px;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
        </div><div class="sa-icon sa-warning pulseWarning" style="display: block;">
            <span class="sa-body pulseWarningIns"></span>
            <span class="sa-dot pulseWarningIns"></span>
        </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success" style="display: none;">
            <span class="sa-line sa-tip"></span>
            <span class="sa-line sa-long"></span>

            <div class="sa-placeholder"></div>
            <div class="sa-fix"></div>
        </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>میشه ستاره هارو خالی نذاری ؟</h2>
        <p style="display: block;">یه ستارم بهمون بدی ما قبولت داریم ستون </p>
        <fieldset>
            <input type="text" tabindex="3" placeholder="">
            <div class="sa-input-error"></div>
        </fieldset><div class="sa-error-container">
            <div class="icon">!</div>
            <p>Not valid!</p>
        </div><div class="sa-confirm-button-container">
            <button wire:click="$emit('forgotCommentSession')" class="cancel" tabindex="2" style="display: inline-block; box-shadow: none;">باشه</button>
        </div></div>
@endif

<script>
    //SweetAlert Off//

    $(document).ready(function () {
        $('.sa-confirm-button-container button').click(function () {
            $('.sweet-overlay').fadeOut(1000);
            $('.sweet-alert').fadeOut(1000);
        });
    })

</script>
