
@if($m=session('add_copoun'))
    <div class="sweet-overlay" tabindex="-1" style="opacity: 1.28; display: block;"></div>
    <div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="false" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="2000" style="display: block; margin-top: -172px;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
        </div><div class="sa-icon sa-warning" style="display: none;">
            <span class="sa-body"></span>
            <span class="sa-dot"></span>
        </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success animate" style="display: block;">
            <span class="sa-line sa-tip animateSuccessTip"></span>
            <span class="sa-line sa-long animateSuccessLong"></span>

            <div class="sa-placeholder"></div>
            <div class="sa-fix"></div>
        </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>تبریک می گم!</h2>
        <p style="display: block;">{{$m}}</p>
        <fieldset>
            <input type="text" tabindex="3" placeholder="">
            <div class="sa-input-error"></div>
        </fieldset><div class="sa-error-container">
            <div class="icon">!</div>
            <p>Not valid!</p>
        </div><div class="sa-button-container">
            <button class="cancel" tabindex="2" style="display: none; box-shadow: none;">لغو</button>
            <div class="sa-confirm-button-container">
                <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(140, 212, 245); box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">باشه</button><div class="la-ball-fall">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div></div>


@endif

@if($m=session('error_delete'))
    <div class="sweet-overlay" tabindex="-1" style="opacity: 1.28; display: block;"></div>
    <div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="false" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: block; margin-top: -172px;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
        </div><div class="sa-icon sa-warning" style="display: none;">
            <span class="sa-body"></span>
            <span class="sa-dot"></span>
        </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success animate" style="display: block;">
            <span class="sa-line sa-tip animateSuccessTip"></span>
            <span class="sa-line sa-long animateSuccessLong"></span>

            <div class="sa-placeholder"></div>
            <div class="sa-fix"></div>
        </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>تبریک می گم!</h2>
        <p style="display: block;">{{$m}}</p>
        <fieldset>
            <input type="text" tabindex="3" placeholder="">
            <div class="sa-input-error"></div>
        </fieldset><div class="sa-error-container">
            <div class="icon">!</div>
            <p>Not valid!</p>
        </div><div class="sa-button-container">
            <button class="cancel" tabindex="2" style="display: none; box-shadow: none;">لغو</button>
            <div class="sa-confirm-button-container">
                <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(140, 212, 245); box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">باشه</button><div class="la-ball-fall">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div></div>


@endif

@if($m=session('delete_copoun'))
    <div class="sweet-overlay" tabindex="-1" style="opacity: 1.28; display: block;"></div>
    <div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="false" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: block; margin-top: -172px;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
        </div><div class="sa-icon sa-warning" style="display: none;">
            <span class="sa-body"></span>
            <span class="sa-dot"></span>
        </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success animate" style="display: block;">
            <span class="sa-line sa-tip animateSuccessTip"></span>
            <span class="sa-line sa-long animateSuccessLong"></span>

            <div class="sa-placeholder"></div>
            <div class="sa-fix"></div>
        </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>تبریک می گم!</h2>
        <p style="display: block;">{{$m}}</p>
        <fieldset>
            <input type="text" tabindex="3" placeholder="">
            <div class="sa-input-error"></div>
        </fieldset><div class="sa-error-container">
            <div class="icon">!</div>
            <p>Not valid!</p>
        </div><div class="sa-button-container">
            <button class="cancel" tabindex="2" style="display: none; box-shadow: none;">لغو</button>
            <div class="sa-confirm-button-container">
                <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(140, 212, 245); box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">باشه</button><div class="la-ball-fall">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div></div>


@endif

@if($m=session('update_copoun'))
    <div class="sweet-overlay" tabindex="-1" style="opacity: 1.28; display: block;"></div>
    <div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="false" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: block; margin-top: -172px;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
        </div><div class="sa-icon sa-warning" style="display: none;">
            <span class="sa-body"></span>
            <span class="sa-dot"></span>
        </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success animate" style="display: block;">
            <span class="sa-line sa-tip animateSuccessTip"></span>
            <span class="sa-line sa-long animateSuccessLong"></span>

            <div class="sa-placeholder"></div>
            <div class="sa-fix"></div>
        </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>تبریک می گم!</h2>
        <p style="display: block;">{{$m}}</p>
        <fieldset>
            <input type="text" tabindex="3" placeholder="">
            <div class="sa-input-error"></div>
        </fieldset><div class="sa-error-container">
            <div class="icon">!</div>
            <p>Not valid!</p>
        </div><div class="sa-button-container">
            <button class="cancel" tabindex="2" style="display: none; box-shadow: none;">لغو</button>
            <div class="sa-confirm-button-container">
                <button wire:click="$emitTo('admin.copoun.index','refreshComponent')" class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(140, 212, 245); box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">باشه</button><div class="la-ball-fall">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
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
