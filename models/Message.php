<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string $language
 * @property string|null $translation
 *
 * @property SourceMessage $id0
 */
class Message extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'language'], 'required'],
            [['id'], 'integer'],
            [['translation'], 'string'],
            [['language'], 'string', 'max' => 16],
            [['id', 'language'], 'unique', 'targetAttribute' => ['id', 'language']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => SourceMessage::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'language' => Yii::t('app', 'Tili'),
            'message' => Yii::t('app', 'Ibora'),
            'translation' => Yii::t('app', 'Tarjimasi'),
        ];
    }

    /**
     * Gets query for [[source]].
     *
     * @return ActiveQuery
     */
    public function getSource(): ActiveQuery
    {
        return $this->hasOne(SourceMessage::className(), ['id' => 'id']);
    }
}
