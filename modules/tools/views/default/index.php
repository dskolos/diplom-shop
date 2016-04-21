<?php
use yii\bootstrap\Nav;
use app\menus\ToolsMenus;
/* @var $this yii\web\View */

$leftMenu = ToolsMenus::dbMenu();
$topMenu = ToolsMenus::topMenu();

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
            <h3 class="text-center"> База даних... </h3>
        </div>

    </div>

</div>
