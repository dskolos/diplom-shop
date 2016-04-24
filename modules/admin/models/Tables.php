<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tables".
 *
 * @property string $id
 * @property string $name
 * @property string $description
 *
 * @property Photos[] $photos
 */
class Tables extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tables';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['name', 'description'], 'string', 'max' => 255],
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
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photos::className(), ['table_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TablesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TablesQuery(get_called_class());
    }
}
