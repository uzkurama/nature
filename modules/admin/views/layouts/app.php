<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Admin Panel',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Bosh sahifa', 'url' => ['/admin/default/index']],
            [
                'label' => 'Bo\'limlar',
                'items' => [
                    ['label' => 'Menu', 'url' => ['/admin/menu/index']],
                    ['label' => 'Ichki Menu', 'url' => ['/admin/sub-menu/index']],
                    ['label' => 'Sahifalar', 'url' => ['/admin/page/index']],
                ],
            ],
            ['label' => 'Yangililar', 'url' => ['/admin/news/index']],
            [
                'label' => 'Sozlamalar',
                'items' => [
                    ['label' => 'Sayt tarjimasi', 'url' => ['/admin/message']],
                ],
            ],
            [
                'label' => Yii::$app->user->identity->name,
                'items' => [
                    ['label' => 'Parol o\'zgartirish', 'url' => ['/admin/default/change-password']],
                    ['label' => 'Chiqish', 'url' => ['/admin/default/logout'], 'linkOptions' => ['data-method' => 'post']],
                ],
            ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; O‘zbekiston Respublikasi «Jonli tabiat» jamoat birlashmasi <?= date('Y') ?></p>

        <p class="pull-right"><?= 'Ishlanma WeCode Team' ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
