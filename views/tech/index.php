<?php
//use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DIPLOM SHOP';

//$categories = Category::find()->all();
//$categoriesMap = ArrayHelper::map($categories, 'id', 'name');
//$categoriesMap = Category::getCategoriesMap();

?>
<div class="tech-index">

    <div class="text-center">
        <h1> Інтернет-магазин комп'ютерної техніки <small> (Модель) </small> </h1>
    </div>

    <div class="row">

        <div class="col-sm-2">
            <h3 class="text-center"> <strong> Категорія </strong> </h3>
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active" onClick="return false;"><a href="."> Всі категорії </a></li>

<!--                --><?//= Category::getCategoriesMap()[0] ?>
<!--                --><?//= Category::getCategoriesMap()[1] ?>
<!--                --><?//= Category::getCategoriesMap()[2] ?>

<!--                --><?php //foreach ($categoriesMap as $category) { ?>
                <?php foreach (Category::getCategoriesMap() as $category) { ?>
                    <li role="presentation"><a href="." onClick="return false;"> <?= $category ?> </a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="col-sm-8">
            <?php Pjax::begin(); ?>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'row'],
                'itemView' => 't-item',
//                    function ($model, $key, $index, $widget) {
//                    return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
//                    } ,
            ]) ?>
            <?php Pjax::end(); ?>
        </div>

        <div class="col-sm-2">
            <h3 class="text-center"> Пошук </h3>
            <?php echo $this->render('t-search', ['model' => $searchModel]); ?>
        </div>

    </div>


</div>
