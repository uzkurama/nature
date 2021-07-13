<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubMenu */

$this->title = Yii::t('app', 'Create Sub Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sub Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
