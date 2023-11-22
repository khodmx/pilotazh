<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Высший пилотаж | Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row justify-content-center">
<div class="site-reg">
    <div class="signupcard">
    <h2 class="title-auth">Регистрация</h2>
    <p class="authtext">Введите данные чтобы войти:</p>
   

    <?php $form = ActiveForm::begin([
        'id' => 'sign-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'signform-password col-lg-2 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'signform-password col-lg-7 form-control'],
            'errorOptions' => ['class' => 'signform-password col-lg-6 invalid-feedback'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput() ?>

        <?= $form->field($model, 'email')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'phone')->textInput() ?>
    
    <div class="row justify-content-center">
        <div class="form-group">
            <div class="butsign">
            <div class="col-lg-12">
                <?= Html::submitButton('Войти', ['class' => 'boxed-btn4 bn28', 'name' => 'login-button']) ?>
            </div>
            </div>
        </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>