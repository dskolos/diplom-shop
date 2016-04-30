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

    <div class="row">

        <?php
        $links = [
            [
                'title' => 'Таблиця <strong> техніки </strong> <small> (&nbsp;Grid&nbsp;) </small>',
                'href' => '/admin/product/index',
                'name' => 'Product',
            ],
            [
                'title' => 'Таблиця <strong> техніки </strong> <small> (&nbsp;List&nbsp;) </small>',
                'href' => '/admin/product-list-view/index',
                'name' => 'Product',
            ],
            [ 'title' => 'blank', ],
            [ 'title' => 'blank', ],
            [
                'title' => 'Таблиця <strong> категорій </strong> <small> (&nbsp;Grid&nbsp;) </small>',
                'href' => '/admin/category/index',
                'name' => 'Category',
            ],
            [
                'title' => 'Таблиця <strong> брендів </strong> <small> (&nbsp;Grid&nbsp;) </small>',
                'href' => '/admin/brand/index',
                'name' => 'Brand',
            ],
            [ 'title' => 'blank', ],
        ];

        $i = 0;
        foreach ($links as $link) {  ?>
            <?php if (($i != 0) and (($i % 3) == 0) )  { ?>
    </div>
    <div class="row">
            <?php }  ?>
        <?php if ($link['title'] != 'blank') { ?>
            <div class="col-sm-4 text-center">
                <h3> <?=$link['title']?> <br> <br>
                    <a href="<?= Url::toRoute($link["href"]); ?>" class="btn btn-primary">
                        <h5> <?=$link['name']?> </h5>
                    </a>
                </h3> <br>
            </div>
        <?php }  ?>
        <? ; $i++; /*echo $i;*/ } ?>

    </div>

</div>
