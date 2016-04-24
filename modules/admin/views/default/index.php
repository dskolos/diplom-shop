<?php
//use yii\bootstrap\Nav;
//use app\menus\AdminMenus;
//use app\widgets\ShowLoremPixel;
/* @var $this yii\web\View */

$this->title = 'admin';
$this->params['breadcrumbs'][] = '<strong> Таблиці: </strong>';
$this->params['breadcrumbs'][] = ['label' => ' <span class="glyphicon glyphicon-bold"></span> Бренди ',
    'url' => ['brands/index'],
    'template' => "<strong title='Бренди'> &nbsp; {link} </strong>"];
$this->params['breadcrumbs'][] = ['label' => ' <span class="glyphicon glyphicon-list-alt"></span> Tables ',
    'url' => ['tables/index'],
    'template' => "<strong title='Бренди'> &nbsp; {link} </strong>"];
$this->params['breadcrumbs'][] = ['label' => ' <span class="glyphicon glyphicon-camera"></span> Фото ',
    'url' => ['photos/index'],
    'template' => "<strong title='Фото'> &nbsp; {link} </strong>" ];
$this->params['breadcrumbs'][] = ['label' => '<strong> admin: </strong>',
    'template' => '<span style="margin-left: 35px"> {link} </span>'];


?>
<h1 class="text-center"> Редагування таблиць </h1>
<?//= Nav::widget(AdminMenus::getTopMenu()) ?>
<!--<br>-->
<!--<h3> Тут передбачається редагувати таблиці </h3>-->
<br>

<?//= ShowLoremPixel::widget() ?>
<div class="row">

    <div class="col-sm-6">
        <h3>
            <a href="/admin/brands/index"> <span class="glyphicon glyphicon-bold"></span>&nbsp;Бренди </a>
            <span> - Таблиця брендів</span>
        </h3>
    </div>

    <div class="col-sm-6">
        <h3>
            <a href="/admin/tables/index"> <span class="glyphicon glyphicon-list-alt"></span>&nbsp;Tables </a>
            <span> - Таблиця таблиць</span>
        </h3>
    </div>

    <div class="col-sm-6">
        <h3>
            <a href="/admin/photos/index"> <span class="glyphicon glyphicon-camera"></span>&nbsp;Фото </a>
            <span> - Таблиця фотографій</span>
        </h3>
    </div>

</div>
