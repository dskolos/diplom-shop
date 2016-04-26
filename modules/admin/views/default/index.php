<?php
//use yii\bootstrap\Nav;
//use app\menus\AdminMenus;
//use app\widgets\ShowLoremPixel;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Адміністрування';
//$this->params['breadcrumbs'][] = '<strong> Таблиці: </strong>';
//$this->params['breadcrumbs'][] = ['label' => ' <span class="glyphicon glyphicon-bold"></span> Бренди ',
//    'url' => ['brands/index'],
//    'template' => "<strong title='Бренди'> &nbsp; {link} </strong>"];
//$this->params['breadcrumbs'][] = ['label' => ' <span class="glyphicon glyphicon-list-alt"></span> Tables ',
//    'url' => ['tables/index'],
//    'template' => "<strong title='Бренди'> &nbsp; {link} </strong>"];
//$this->params['breadcrumbs'][] = ['label' => ' <span class="glyphicon glyphicon-camera"></span> Фото ',
//    'url' => ['photos/index'],
//    'template' => "<strong title='Фото'> &nbsp; {link} </strong>" ];
//$this->params['breadcrumbs'][] = ['label' => '<strong> admin: </strong>',
//    'template' => '<span style="margin-left: 35px"> {link} </span>'];

?>

<div class="admin-default-index">

    <h1 class="text-center"> <span class="glyphicon glyphicon-wrench"></span> Адміністрування </h1>
    <?//= Nav::widget(AdminMenus::getTopMenu()) ?>
    <!--<br>-->
    <!--<h3> Тут передбачається редагувати таблиці </h3>-->
    <br>

    <?//= ShowLoremPixel::widget() ?>

    <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Таблиці: </h2>
    <br>

    <div class="row">

        <div class="col-sm-4 text-center">
            <a href="<?= Url::toRoute('/admin/category/index') ?>" class="btn btn-primary">
                <h3> Category </h3>
            </a>
        </div>

        <div class="col-sm-4 text-center">
            <a href="<?= Url::toRoute('/admin/brand/index') ?>" class="btn btn-primary">
                <h3> Brand </h3>
            </a>
        </div>

        <div class="col-sm-4 text-center">
            <a href="<?= Url::toRoute('/admin/product/index') ?>" class="btn btn-primary">
                <h3> Product </h3>
            </a>
        </div>

    </div>

</div>
