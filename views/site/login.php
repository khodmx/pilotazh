<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Высший пилотаж | Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row justify-content-center">
<div class="site-login">
    <div class="authcard">
    <h2 class="title-auth">Авторизация</h2>
    <p class="authtext">Введите данные чтобы войти:</p>
   

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'loginform-password col-lg-2 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'loginform-password col-lg-7 form-control'],
            'errorOptions' => ['class' => 'loginform-password col-lg-6 invalid-feedback'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox(['template' => "<div class=\"offset-lg-2 col-lg-12 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",]) ?>
    <div class="row justify-content-center">
        <div class="form-group">
            <div class="butlog">
            <div class="but col-lg-12">
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