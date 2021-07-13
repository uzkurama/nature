<?php

namespace app\modules\admin;

use Yii;
/**
 * admin module definition class
 */
class admin extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $uniqueId = 'admin';
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = '@app/modules/admin/views/layouts/app';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        Yii::$app->language = 'uz-Latn-UZ';
        Yii::$app->sourceLanguage = 'uz-Latn-UZ';
    }
}
