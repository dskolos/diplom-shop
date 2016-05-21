<?php

/* @var $model app\models\Product */

use app\models\Category;
use app\models\Brand;



?>

<!--<div class="row">-->

    <div class="col-xs-3 text-center">
        <img src='/img/<?= $model->photo_url ?>' class="img-in-t-item">
    </div>

    <div class="col-xs-9">

        <div class="content-in-t-item">
            <div class="row">
                <div class="col-sm-9">
                    <h4><strong> <?= $model->name ?> </strong></h4>
                    Категорія - <strong> <?= Category::getCategoriesMap()[$model->category_id] ?> </strong>
                    <br>
                    Бренд - <strong> <?= Brand::getBrandsMap()[$model->brand_id] ?> </strong>
                    <br>
                    Ціна - <strong> <?= $model->price ?> </strong> гривень




                </div>

                <div class="col-sm-3">
                    &nbsp; <br>
                    <?php if (Yii::$app->user->identity->role > 1) { ?>
                    <a href="/admin/product/update?id=<?=$model->id?>" class="btn btn-warning btn-sm"> Редагувати </a>
                    <?php } ?>
                </div>
                <div class="col-sm-12">
<!--                    Категорія - <strong> --><?//= Category::getCategoriesMap()[$model->category_id] ?><!-- </strong>-->
<!--                    <br>-->
<!--                    Бренд - <strong> --><?//= Brand::getBrandsMap()[$model->brand_id] ?><!-- </strong>-->
<!--                    <br>-->
<!--                    Ціна - <strong> --><?//= $model->price ?><!-- </strong> гривень-->
                    <br>
                    &nbsp;&nbsp;&nbsp; Короткий опис:
                    <br> <i> <?= $model->description ?> </i>
                </div>
            </div>

            <!--        --><?php
//        var_dump($model);
//        ?>

        </div>

    </div>

<!--</div>-->
