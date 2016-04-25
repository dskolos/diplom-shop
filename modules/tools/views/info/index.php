<?php
use yii\bootstrap\Nav;
use app\menus\ToolsMenus;
/* @var $this yii\web\View */

$leftMenu = ToolsMenus::LeftMenu();
$topMenu = ToolsMenus::TopMenu();

$this->title = 'Tools';

?>
<h1 class="text-center"> <span class="glyphicon glyphicon-info-sign"></span> Info </h1>
<br>

<div class="info-index">

    <div class="row">

        <div class="col-sm-3">
            <?= Nav::widget($leftMenu) ?>
        </div>

        <div class="col-sm-9">

            <div>
                <h3 class="text-center"> Схема бази даних: </h3>
                <div class="img-center">
                    <img src="/i/d-pictures/db05.2016-04-21_03.32.11.png" alt="" class="wide-picture">
                </div>
            </div>
            <hr>
            <div>
                <h3 class="text-center"> Попередня схема бази даних: </h3>
                <div class="img-center">
                    <img src="/i/d-pictures/db.xmind 2016-04-19 02.37.29.png" alt="" class="wide-picture">
                </div>
            </div>

        </div>

    </div>

</div>