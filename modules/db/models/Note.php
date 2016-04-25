<?php

namespace app\modules\db\models;

use Yii;

/**
 * This is the model class for table "note".
 *
 * @property string $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $text
 * @property string $category_id
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'note';
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
            [['name', 'title', 'description', 'text', 'category_id'], 'required'],
            [['text'], 'string'],
            [['category_id'], 'integer'],
            [['name', 'title', 'description'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'text' => 'Text',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @inheritdoc
     * @return NoteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NoteQuery(get_called_class());
    }
}
