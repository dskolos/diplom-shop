<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\db\models\TipSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tip-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-sm-2">
            <?= $form->field($model, 'id') ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'name') ?>
        </div>
<!--    --><?//= $form->field($model, 'title') ?>
        <div class="col-sm-7">
            <?= $form->field($model, 'text') ?>
        </div>
<!--    --><?//= $form->field($model, 'sort') ?>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
<!--                --><?//= Html::resetButton('Reset', ['class' => 'btn btn-default', 'href' => '#' ]) ?>
<!--                <a href="/db/tips/index" class="btn btn-default"> Reset </a>-->
<!--                --><?//= Html::a('reset', ['class' => "btn btn-default", 'href' => "/db/tips/index", ])?>
<!--                --><?//= Html::a('Reset', '/db/tips/index', ['class' => 'btn btn-default'])?>
                <?= Html::a('Reset', Url::toRoute('/db/tips/index'), ['class' => 'btn btn-default'])?>
<!--                --><?//= Html::a('Reset', '.', ['class' => 'btn btn-default'])?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
