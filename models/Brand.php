<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;


/**
 * This is the model class for table "brand".
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $full_description
 *
 * @property Product[] $products
 */
class Brand extends ActiveRecord {

    public static $brandsMap;

    public static function getBrandsMap() {
        if (!isset(static::$brandsMap)) {
            static::$brandsMap = ArrayHelper::map(Brand::find()->all(), 'id', 'name');
        }
        return static::$brandsMap;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brand';
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
        return $this->hasMany(Product::className(), ['brand_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return BrandQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BrandQuery(get_called_class());
    }
}
