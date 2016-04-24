<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "brands".
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $full_description
 *
 * @property Products[] $products
 */
class Brands extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['full_description'], 'string'],
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
            'full_description' => 'Full Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['brand_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return BrandsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BrandsQuery(get_called_class());
    }
}
