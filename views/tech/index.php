<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DIPLOM SHOP';
?>
<div class="tech-index">

    <div class="text-center">
        <h1> Інтернет-магазин комп'ютерної техніки <small> (Модель) </small> </h1>
    </div>

    <div class="row">

        <div class="col-sm-2">
            <h3 class="text-center"> Меню </h3>
        </div>

        <div class="col-sm-8">
            <?php Pjax::begin(); ?>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => 't-item',
//                    function ($model, $key, $index, $widget) {
//                    return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
//                    } ,
            ]) ?>
            <?php Pjax::end(); ?>
        </div>

        <div class="col-sm-2">
            <h3 class="text-center"> Пошук </h3>
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>

    </div>


</div>
