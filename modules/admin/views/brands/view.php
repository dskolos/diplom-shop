<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brands */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Таблиці', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Бренди', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brands-view">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Змінити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description',
            'full_description:ntext',
        ],
    ]) ?>

</div>
