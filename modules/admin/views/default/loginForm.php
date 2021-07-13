<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\captcha\Captcha;
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Web-saytining boshqarish tizimi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <h1 class="text-center">Kirish</h1>

    <?php $form = ActiveForm::begin([
        'action' => ['default/login'],
    ]); ?>

        <?= $form->field($model, 'email')->textInput(['type' => 'email', 'placeholder' => 'Email'])->label(false) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false) ?>

        <?= $form->field($model, 'captcha', ['template' => '{label}{input}{error}'])->widget(Captcha::className(), [
            'template' => '<div class="row"><div class="col-6 col-sm-3">{image}</div><div class="col-6 col-sm-3" style="margin: 0.5em 0">{input}</div></div>',
            'captchaAction' => 'default/captcha',
        ])->label(false) ?>

        <?= $form->field($model, 'rememberMe')->checkbox()->label('Eslab qolish') ?>

        <div class="form-group text-center">
                <?= Html::submitButton('Kirish', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
