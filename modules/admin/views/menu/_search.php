<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\MenuSearch */
/* @var $form yii\widgets\ActiveForm */

$lang = Yii::$app->urlManager->languages;
array_shift($lang);
?>

<div class="menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1,
        ]
    ]); ?>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'language')->dropDownList($lang, ['prompt' => '']) ?>
        </div>
        <div class="col-md-4">
             <?= $form->field($model, 'type')->dropDownList(\app\models\Menu::getMenuTypes(), ['prompt' => '']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Qidirish'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
