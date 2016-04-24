<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property string $id
 * @property string $name
 * @property string $url
 * @property string $title
 * @property string $description
 * @property string $table_id
 * @property string $record_id
 *
 * @property Tables $table
 */
class Photos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url', 'title', 'description'], 'required'],
            [['table_id', 'record_id'], 'integer'],
            [['name', 'url', 'title', 'description'], 'string', 'max' => 255],
            [['table_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tables::className(), 'targetAttribute' => ['table_id' => 'id']],
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
            'url' => 'Url',
            'title' => 'Title',
            'description' => 'Description',
            'table_id' => 'Table ID',
            'record_id' => 'Record ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTable()
    {
        return $this->hasOne(Tables::className(), ['id' => 'table_id']);
    }

    /**
     * @inheritdoc
     * @return PhotosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhotosQuery(get_called_class());
    }
}
