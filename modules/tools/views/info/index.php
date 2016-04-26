<?php
use yii\bootstrap\Nav;
use app\menus\ToolsMenus;
/* @var $this yii\web\View */

//$leftMenu = ToolsMenus::LeftMenu();
//$topMenu = ToolsMenus::TopMenu();

$this->title = 'Інформація';

?>
<h1 class="text-center"> <span class="glyphicon glyphicon-info-sign"></span> Інформація </h1>
<br>

<div class="tools-info-index">

    <div class="row">

        <div class="col-sm-3">
            <?= Nav::widget(ToolsMenus::LeftMenu()) ?>
        </div>

        <div class="col-sm-9">

            <div>
                <h3 class="text-center"> Схема бази даних: </h3>
                <div class="img-center">
                    <img src="/i/d-pictures/db07.2016-04-26_07.21.13.png" alt="" class="wide-picture">
                </div>
            </div>

        </div>

    </div>

</div>