<?php

/* @var $model app\models\Product */

use app\models\Category;
use app\models\Brand;

?>

    <div class="col-xs-3 text-center">
        <img src='/img/<?= $model->photo_url ?>' class="img-in-t-item">
    </div>

    <div class="col-xs-9">

        <div class="content-in-t-item">
            <div class="row">
                <div class="col-sm-9">
                    <strong> <?= $model->name ?> </strong>
                    <br>
                    <small>
                    Категорія - <strong> <?= Category::getCategoriesMap()[$model->category_id] ?> </strong>
                    <br>
                    Бренд - <strong> <?= Brand::getBrandsMap()[$model->brand_id] ?> </strong>
                    <br>
                    Ціна - <strong> <?= $model->price ?> </strong> гривень
                    <br>
                    Оцінка - <strong> <?= $model->recommended ?> </strong> (з 5 балів)
                    </small>
                </div>

                <div class="col-sm-3">
                    &nbsp; <br>
                    <?php if (Yii::$app->user->identity->role > 1) { ?>
                    <a href="/admin/product/update?id=<?=$model->id?>" class="btn btn-warning btn-sm"> Редагувати </a>
                    <?php } ?>
                </div>
                <div class="col-sm-12">
                    <small>
                    &nbsp;&nbsp;&nbsp; Короткий опис:
                    <br> <i> <?= $model->description ?> </i>
                    </small>
                </div>
            </div>

        </div>

    </div>
