<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://cdn.tailwindcss.com"></script>

<!--<div class="site-login">-->
<!---->
<!--    <h1 class="text-3xl font-bold underline text-clifford">--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>Please fill out the following fields to login:</p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!---->
<!--            --><?php //$form = ActiveForm::begin([
//                'id' => 'login-form',
//                'fieldConfig' => [
//                    'template' => "{label}\n{input}\n{error}",
//                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
//                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
//                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
//                ],
//            ]); ?>
<!---->
<!--            --><?php //= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
<!---->
<!--            --><?php //= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--            --><?php //= $form->field($model, 'rememberMe')->checkbox([
//                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
//            ]) ?>
<!---->
<!--            <div class="form-group">-->
<!--                <div>-->
<!--                    --><?php //= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!---->
<!--            <div style="color:#999;">-->
<!--                You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>-->
<!--                To modify the username/password, please check out the code <code>app\models\User::$users</code>.-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


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
                <div class="p-2 border border-gray-900 text-sm max-h-64">
                    <span class="">Sign In with your <b class="text-bold">MyLokal</b> Account <p class="relative r-0 text-right text-md" style="top: -60px; font-size: 16px;">No Account? <a href="#" class="text-blue-500">Signup</a></p></span>
                    <div class="mb-2">
                        <input checked type="radio" on name="select_phone_email" id="phone">
                        <label for="phone">Phone</label>
                        <input type="radio" name="select_phone_email" class="ml-4" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="my-3">
                        <input type="text" class="w-full border border-gray-500 h-8 pl-2" placeholder="Email">
                    </div>
                    <div class="mt-3 flex">
                        <div class="w-full flex" style="max-width: 250px">
                        <input type="text" class="border border-gray-500 h-8 pl-2 w-full"  placeholder="Password">
                        <div class="relative right-5 top-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 cursor-pointer">
                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        </div>
                        <button class="bg-blue-800 p-2 text-xs text-white cursor-pointer active:ring active:ring-blue-300" style="width: 110px"> Get an OTP</button>
                    </div>
                    <div class="mt-2">
                        <input type="checkbox" name="remeber_me" id="remeber_me">
                        <label for="remeber_me">Remeber Me</label>
                    </div>
                    <div class="mt-2 mb-6 flex justify-between w-full max-w-md">
                        <button class="bg-blue-800 p-2 text-xs text-white cursor-pointer active:ring active:ring-blue-300" >Sign in</button>
                        <a href="#" class="text-blue-500">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script defer>
    function resizeUpdate() {
        var elemWidth = document.getElementById("mod").offsetWidth;
        document.getElementById("cw").innerHTML =  "CW:" + elemWidth;
    }
    window.addEventListener("resize", resizeUpdate);
    (function(){
        resizeUpdate();
    })();
</script>