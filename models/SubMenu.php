<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_menu".
 *
 * @property int $id
 * @property int $menu_id
 * @property int $position
 * @property string $name
 * @property string|null $url
 */
class SubMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'position', 'name'], 'required'],
            [['menu_id', 'position'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'menu_id' => Yii::t('app', 'Menu ID'),
            'position' => Yii::t('app', 'Position'),
            'name' => Yii::t('app', 'Name'),
            'url' => Yii::t('app', 'Url'),
        ];
    }
}
