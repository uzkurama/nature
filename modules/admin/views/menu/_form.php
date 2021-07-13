<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */

$lang = Yii::$app->urlManager->languages;
array_shift($lang);
$pos = \app\models\Menu::find()->orderBy(['position' => SORT_DESC])->one();
$pos = $pos == null ? 1 : $pos->position + 1;

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language')->dropDownList($lang, ['prompt' => '']) ?>

    <?= $form->field($model, 'position')->hiddenInput(['value' => $pos])->label(false) ?>

    <?= $form->field($model, 'type')->dropDownList(\app\models\Menu::getMenuTypes(), ['prompt' => '']) ?>

    <?= $form->field($model, 'page')->widget(Select2::classname(), [
        'language' => 'ru',
        'pluginOptions' => [
            'allowClear' => true,
            'minimumInputLength' => 4,
            'ajax' => [
                'url' => \yii\helpers\Url::to(['menu/page-search']),
                'dataType' => 'json',
                'data' => new JsExpression('function(params) { return {q:params.term}; }')
            ],
        ],
        'pluginEvents' => [
            "change" => "function() {
                url = '/page/' + $(this).val();
                console.log(url);
                $('#menu-url').val(url);
            }",
        ]
    ]); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

$js = <<< JS
$('#menu-type').on('change', function() {
    val = $(this).val() == '' ? $('#menu-type :selected').attr('value') : $(this).val();
    if(val == 1){
        $('.field-menu-page').show();
        $('.field-menu-url').show();
    }
    else{
        $('.field-menu-page').hide();
        $('.field-menu-url').hide();
        $('#menu-url').val('');
    }
}).ready(function() {
    val = $(this).val() == '' ? $('#menu-type :selected').attr('value') : $(this).val();
    if(val == 1){
        $('.field-menu-page').show();
        $('.field-menu-url').show();
    }
    else{
        $('.field-menu-page').hide();
        $('.field-menu-url').hide();
        $('#menu-url').val('');
    }
});
$('.field-menu-page').hide();
$('.field-menu-url').hide();
JS;


$this->registerJs($js, \yii\web\View::POS_END);
