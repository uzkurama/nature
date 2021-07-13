<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property string $language
 * @property int $type
 * @property string|null $url
 */
class Menu extends \yii\db\ActiveRecord
{

    public $page;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'language', 'type'], 'required'],
            [['type', 'position'], 'integer'],
            [['name', 'language', 'url'], 'string', 'max' => 255],
        ];
    }

    public static function getMenuTypes() : array
    {
        return  [
            1 => 'Sahifa',
            2 => 'Bo\'lim',
        ];
    }

    public function getTypes()
    {
        return ArrayHelper::getValue($this->getMenuTypes(), $this->type);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Nomi'),
            'language' => Yii::t('app', 'Tili'),
            'type' => Yii::t('app', 'Turi'),
            'page' => Yii::t('app', 'Sahifa tanlash'),
            'types' => Yii::t('app', 'Turi'),
            'url' => Yii::t('app', 'Manzili'),
            'position' => Yii::t('app', 'O\'rni'),
        ];
    }
}
