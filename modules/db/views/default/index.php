<?php
use yii\bootstrap\Nav;
use app\menus\DbMenus;
/* @var $this yii\web\View */

$title = 'DB';
$this->title = $title;
//$this->params['breadcrumbs'][] = '<strong>' . '<h1>' .
//    ' <span class="glyphicon glyphicon-film"></span> DB  ' .
//    '</h1>' . '</strong>';
//$this->params['breadcrumbs'][] = '<strong> Таблиці: </strong>';

?>
<div class="db-default-index">

    <h1 class="text-center"> <span class="glyphicon glyphicon-film"></span> Links  </h1>

    <?= Nav::widget(DbMenus::topMenu()) ?>
    <br>

    <?= Nav::widget(DbMenus::secondMenu()) ?>


</div>
