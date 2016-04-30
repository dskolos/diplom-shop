<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use app\models\Brand;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([

        'options' => [
//            'encodeLabels' => true,
            'encodeLabels' => false,
        ]
    ]); ?>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">

            <?php
            $categories = Category::find()->all();
            $categoriesMap = ArrayHelper::map($categories, 'id', 'name');
            ?>
            <?= $form->field($model, 'category_id')->dropDownList(
                $categoriesMap,
                [
                    'prompt' => ' - = Оберіть категорію = - ',
                    'options' =>
                        [
                            $model['category_id'] => ['selected ' => true],
                        ],
                ]
            )?>

            <?php
            $brands = Brand::find()->all();
            $brandsMap = ArrayHelper::map($brands, 'id', 'name');
            ?>
            <?= $form->field($model, 'brand_id')->dropDownList(
                $brandsMap,
                [
                    'prompt' => ' - = Оберіть бренд = - ',
                    'options' =>
                        [
                            $model['brand_id'] => ['selected ' => true],
                        ],
                ]
            )?>

            <?= $form->field($model, 'recommended')->dropDownList(
                [
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                ],
                [
                    'prompt' => ' - = Оберіть рекомендацію = - ',
                    'options' =>
                        [
                            $model['recommended'] => ['selected ' => true],
                        ],
                ]
            )?>

        </div>
        <div class="col-sm-4">

            <?= $form->field($model, 'photo_url')->textInput(['maxlength' => true]) ?>

            <img src='/img/<?= $model->photo_url ?>' class="img-in-update">

        </div>
    </div>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
