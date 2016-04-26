<?php
use yii\bootstrap\Nav;
use app\menus\AboutMenus;

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Powered';
//$this->params['breadcrumbs'][] = $this->title;

//$leftMenu = AboutMenus::leftMenu();

?>
<div class="about-index">

    <h1 class="text-center"> About </h1>
    <br>

    <div class="row">

        <div class="col-sm-3">
            <?= Nav::widget(AboutMenus::leftMenu()) ?>
        </div>

        <div class="col-sm-6 text-center">
            <br>
            <h3> Powered by </h3>
            <br>
            <a href="http://www.yiiframework.com/" target="_blank"> <h2> Yii Framework </h2> </a>

        </div>


        </div>

    </div>

</div>
