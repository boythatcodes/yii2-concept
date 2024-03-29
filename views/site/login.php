<?php

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Test Login';
?>
<div class="w-full flex justify-center">

    <div class="w-full max-w-md sm:max-w-lg ">
        <div class="text-red-500 font-semibold" id="cw">CW: 525</div>
        <div class="w-full rounded border border-gray-900 text-xs" id="mod">
            <div class="w-full flex justify-between pt-2 pb-3 px-3 border-b border-b-gray-300" >
                <h1 class="text-3xl font-medium" style="font-weight: 500;">Customer Login</h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 mt-2.5 hover:text-black cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </div>
            <div class="w-full flex flex-col-reverse sm:flex-row p-2 sm:gap-4">
                <div class="px-2 border border-gray-900 max-w-sm inner_social_login p-2" style=" height: 264px !important;">
                    <span class="text-xs" >Sign In with your <b class="text-bold">Social Network</b> <br> Account</span>
                    <div class="w-full mt-2 flex justify-between gap-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" class="h-8 cursor-pointer" alt="Google">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Linkedin-logo-blue-In-square-40px.png" class="h-8 cursor-pointer" alt="Google">
                        <img src="https://seeklogo.com/images/T/twitter-icon-square-logo-108D17D373-seeklogo.com.png" class="h-8 cursor-pointer" alt="Twitter">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Apple_Store_logo.svg" class="h-8 cursor-pointer" alt="Apple">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Facebook_icon_2013.svg" class="h-8 cursor-pointer" alt="Facebook">
                    </div>
                </div>
                    <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
                'options' => ['class' => 'p-2 border border-gray-900 text-xs max-h-64']]); ?>
                    <span class="">Sign In with your <b class="text-bold">MyLokal</b> Account <p class="relative r-0 text-right text-sm" style="top: -50px; ">No Account? <a href="#" class="text-blue-500">Signup</a></p></span>
                    <div class="-mt-2">
                        <input onclick="update_dropdown('phone')" value="phone" name="type_of_mode" checked type="radio" id="phone">
                        <label for="phone" style="margin-top: -10px;">Phone Number</label>
                        <input onclick="update_dropdown('email')" value="email" name="type_of_mode" type="radio" class="ml-2" id="email">
                        <label for="email" style="margin-top: -10px;">Email</label>
                    </div>
                    <div class="mb-3 mt-1.5 flex phone_container">
                        <select name="phone" id="phone_code" class="h-7 bg-white border-t border-l border-b border-t-gray-300 border-b-gray-300 border-l-gray-300">
                            <option value="+977">+977</option>
                        </select>
                        <?= $form->field($model, 'email')->textInput([
                            'class' => 'w-full border border-gray-500 h-7 pl-2',
                            'placeholder' => 'Phone',
                            'id' => 'email_phone'
                        ])->label(false) ?>
                    </div>
                    <div class="mt-3 flex">
                        <div class="w-full flex password_container">
                            <?= $form->field($model, 'password')->passwordInput([
                                'class' => 'border border-gray-500 h-7 pl-2 w-full',
                                'placeholder' => 'Password',
                                'id' => 'password'
                            ])->label(false) ?>
                        <div class="relative right-5 top-2">
                            <svg xmlns="http://www.w3.org/2000/svg" onclick="toggle_eye_slash('eye')" id="eye" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 cursor-pointer">
                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" onclick="toggle_eye_slash('slash')" id="eye_slash" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 cursor-pointer hidden">
                                <path d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z" />
                                <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z" />
                                <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z" />
                            </svg>
                        </div>
                        </div>
                        <button class="bg-blue-800 text-xs text-white cursor-pointer active:ring active:ring-blue-300 py-0" style="width: 65px; "> Get an OTP</button>
                    </div>
                    <div class="mt-2">
                        <?=
                        $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ])
                        ?>
                    </div>
                    <div class="mt-2 mb-6 flex justify-between w-full max-w-md">
                        <?= Html::submitButton('Sign In', ['class' => 'bg-blue-800 px-2 py-1 text-white cursor-pointer active:ring active:ring-blue-300 text-xxs', 'name' => 'login-button']) ?>
                        <a href="#" class="text-blue-500">Forgot password?</a>
                    </div>
                    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer mt-auto w-full">
    <div class="flex w-full justify-center">
        <div class="w-full"></div>
        <div class=" flex w-full" >
            <div class="w-96 p-3 text-muted " style="background-color: #f5f5f5;">
                <p class="text-2xl font-bold">Contact Us</p>
                <p>Globalbizsoft </p>
                <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mt-.5"> <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" /> </svg> 17420 NE 119TH Way, Redmond, WA 98052</p>
                <p class="flex"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mt-.5"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" /> </svg> +14083733167</p>
            </div>

        </div>
        <div class="w-full"></div>
        <div class="w-full"></div>
    </div>
</footer>
<script>
    email_phone = document.getElementById("email_phone")
    function resizeUpdate() {
        var elemWidth = document.getElementById("mod").offsetWidth;
        document.getElementById("cw").innerHTML =  "CW:" + elemWidth;
    }
    window.addEventListener("resize", resizeUpdate);
    $(function() {
        resizeUpdate();
    });
    

    function update_dropdown(from){
        switch (from) {
            case "phone":
                document.getElementById("phone_code").classList.remove("hidden");
                email_phone.placeholder = "Phone Number"
                break;
            default:
                document.getElementById("phone_code").classList.add("hidden");
                email_phone.placeholder = "Email"
                break;
        }

    }

    function toggle_eye_slash(from){
        var password = document.getElementById("password");
        switch (from) {
            case "eye":
                document.getElementById("eye").classList.add("hidden");
                document.getElementById("eye_slash").classList.remove("hidden");
                password.type = "text";
                break;
            default:
                document.getElementById("eye").classList.remove("hidden");
                document.getElementById("eye_slash").classList.add("hidden");
                password.type = "password";
                break;
        }
    }
</script>

<style>
    .field-email_phone{
        width: 100%;
    }
    .field-password{
        width: 100%;
    }
    .form-group {
        margin-bottom: 0px;
    }

    .inner_social_login{
        width: 280px;
    }
    .password_container{
        max-width: 200px
    }
    @media (min-width: 640px) {
        .inner_social_login {
            width: 270px;
        }

        .password_container {
            max-width: 110px;
        }

        .phone_container {
            width: 220px !important;
        }

        button {
            font-size: 10px !important;
        }
    }

    main > .container {
        padding: 70px 15px 20px;
    }
    @media (min-width: 768px){
        .container, .container-sm, .container-md {
            max-width: 720px;
        }
    }

    @media (min-width: 576px) {
        .container, .container-sm {
            max-width: 540px;
        }
    }
</style>