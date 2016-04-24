<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
//use yii\bootstrap\Nav;
//use app\menus\AdminMenus;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BrandsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Бренди';
$this->params['breadcrumbs'][] = ['label' => 'Таблиці', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<h1 class="text-center"> Інтерфейс адміністрування </h1>-->
<h1 class="text-center"><?= Html::encode($this->title) ?></h1>
<?//= Nav::widget(AdminMenus::getTopMenu()) ?>
<!--<br>-->
<!--<h3> Тут передбачається редагувати таблиці </h3>-->
<!--<br>-->

<div class="brands-index">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!--    <br>-->
    <p>
        <?= Html::a('Додати бренд', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            'full_description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
