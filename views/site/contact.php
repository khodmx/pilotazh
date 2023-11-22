<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;


$this->title = 'Высший пилотаж | Связаться с нами';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row justify-content-center">
    <div class="site-contact">
    <div class="contactcard"> 
    <h2 class="title-contact">Связаться с нами</h2>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Спасибо, что связались с нами. Мы пришлём ответное письмо Вам на почту.
        </div>

    <?php else: ?>
                <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'contactform-password col-lg-2 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'contactform-password col-lg-7 form-control'],
                    'errorOptions' => ['class' => 'contactform-password col-lg-6 invalid-feedback'],],]); ?>


                    <?= $form->field($model, 'name') ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'phone') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-6">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                     <div class="row justify-content-center">
                     <div class="form-group">
                        <div class="butcontact">
                            <div class="col-lg-12">
                <?= Html::submitButton('Войти', ['class' => 'boxed-btn4 bn28', 'name' => 'login-button']) ?>
           
            </div>
        </div>
        </div>
    </div>

                <?php ActiveForm::end(); ?>
</div>
           
    <?php endif; ?>

</div>
</div>
</div>
</div>
