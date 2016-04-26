<?php

namespace app\modules\db\models;

use Yii;

/**
 * This is the model class for table "tip".
 *
 * @property string $id
 * @property string $name
 * @property string $title
 * @property string $text
 * @property string $sort
 */
class Tip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tip';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('ddb');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'text'], 'required'],
            [['text'], 'string'],
            [['name', 'title'], 'string', 'max' => 255],
            [['sort'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'text' => 'Text',
            'sort' => 'Sort',
        ];
    }

    /**
     * @inheritdoc
     * @return TipQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipQuery(get_called_class());
    }
}
