<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $full_description
 *
 * @property Product[] $products
 */
class Category extends ActiveRecord {

    public static $categoriesMap;

    public static function getCategoriesMap() {
        if (!isset(static::$categoriesMap)) {
//            $categories = Category::find()->all();
//            $categoriesMap = ArrayHelper::map($categories, 'id', 'name');
            static::$categoriesMap = ArrayHelper::map(Category::find()->all(), 'id', 'name');
        }
        return static::$categoriesMap;
    }



    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['full_description'], 'string'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
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
    public function getProducts() {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CategoryQuery the active query used by this AR class.
     */
    public static function find() {
        return new CategoryQuery(get_called_class());
    }
}
