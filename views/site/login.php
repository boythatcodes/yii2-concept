<?php

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Test Login';
?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full flex justify-center">

    <div class="w-full max-w-md sm:max-w-lg ">
        <div class="text-red-500 font-semibold" id="cw">CW: 525</div>
        <div class="w-full rounded border border-gray-900" id="mod">
            <div class="w-full flex justify-between pt-2 pb-3 px-4 border-b border-b-gray-300" >
                <h1 class="text-3xl font-medium">Customer Login</h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 mt-2.5 hover:text-black cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </div>
            <div class="w-full flex flex-col-reverse sm:flex-row p-2">
                <div class="px-2 border border-gray-900 max-w-sm" style="max-width: 280px; height: 264px !important;">
                    <span class="text-sm">Sign In with your <b class="text-bold">Social Network</b> Account</span>
                    <div class="w-full mt-2 flex gap-2">
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
                'options' => ['class' => 'p-2 border border-gray-900 text-sm max-h-64']]); ?>
                    <span class="">Sign In with your <b class="text-bold">MyLokal</b> Account <p class="relative r-0 text-right text-md" style="top: -60px; font-size: 16px;">No Account? <a href="#" class="text-blue-500">Signup</a></p></span>
                    <div class="-mt-2">
                        <input onclick="update_dropdown('phone')" value="phone" name="type_of_mode" checked type="radio" on name="select_phone_email" id="phone">
                        <label for="phone">Phone</label>
                        <input onclick="update_dropdown('email')" value="email" name="type_of_mode" type="radio" name="select_phone_email" class="ml-4" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="my-3 flex">
                        <select name="phone" id="phone_code" class="bg-white border-t border-l border-b border-t-gray-300 border-b-gray-300 border-l-gray-300">
                            <option value="+977">+977</option>
                        </select>
                        <?= $form->field($model, 'email')->textInput([
                            'class' => 'w-full border border-gray-500 h-8 pl-2',
                            'placeholder' => 'Phone',
                            'id' => 'email_phone'
                        ])->label(false) ?>
                    </div>
                    <div class="mt-3 flex">
                        <div class="w-full flex" style="max-width: 250px">
                            <?= $form->field($model, 'password')->passwordInput([
                                'class' => 'border border-gray-500 h-8 pl-2 w-full',
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
                        <button class="bg-blue-800 p-2 text-xs text-white cursor-pointer active:ring active:ring-blue-300" style="width: 110px"> Get an OTP</button>
                    </div>
                    <div class="mt-2">
                        <?=
                        $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ])
                        ?>
                    </div>
                    <div class="mt-2 mb-6 flex justify-between w-full max-w-md">
                        <?= Html::submitButton('Login', ['class' => 'bg-blue-800 p-2 text-xs text-white cursor-pointer active:ring active:ring-blue-300', 'name' => 'login-button']) ?>
                        <a href="#" class="text-blue-500">Forgot password?</a>
                    </div>
                    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<script>
    email_phone = document.getElementById("email_phone")
    function resizeUpdate() {
        var elemWidth = document.getElementById("mod").offsetWidth;
        document.getElementById("cw").innerHTML =  "CW:" + elemWidth;
    }
    window.addEventListener("resize", resizeUpdate);
    (function(){
        resizeUpdate();
    })();

    function update_dropdown(from){
        switch (from) {
            case "phone":
                document.getElementById("phone_code").classList.remove("hidden");
                email_phone.placeholder = "Phone"
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
</style>