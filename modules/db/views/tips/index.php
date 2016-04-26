<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\db\models\TipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tip-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>-->
<!--        --><?//= Html::a('Create Tip', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
<?php //Pjax::begin(); ?>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
        },
    ]) ?>
<?php //Pjax::end(); ?>

</div>
