<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Menu');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Menu tuzish'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php Modal::begin([
            'id' => 'modal_select_lang',
            'toggleButton' => ['label' => 'Menu tartibini almshtirish', 'class' => 'btn btn-warning']
        ]);?>

        <?php ActiveForm::begin([
            'method' => 'get',
            'action' => ['sortable']
        ]);?>

        <label for="lang">Tilni tanlang</label>

        <div class="form-group">
            <?= Html::dropDownList('lang', '', Yii::$app->urlManager->languages, ['class' => 'form-control', 'prompt' => '']);?>
        </div>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Tanlsh'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end();?>

        <?php Modal::end();?>
    </p>

    <?php Pjax::begin(['enablePushState' => false]);?>
    <?= $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'position',
            'name',
            'types',
            'url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>

</div>
