<?php
use yii\bootstrap\Nav;
use app\menus\ToolsMenus;
/* @var $this yii\web\View */

$leftMenu = ToolsMenus::LeftMenu();
$topMenu = ToolsMenus::TopMenu();

$this->title = 'Tools';

?>

<h1 class="text-center"> <span class="glyphicon glyphicon-wrench"></span> Tools </h1>

<div class="row">

    <div class="col-sm-3">
        <?= Nav::widget($leftMenu) ?>
    </div>

    <div class="col-sm-9">

        <?= Nav::widget($topMenu) ?>

        <div>
            <h3> Інша інформація... </h3>
        </div>

    </div>

</div>
