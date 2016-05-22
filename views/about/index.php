<?php
use yii\bootstrap\Nav;
use app\menus\AboutMenus;

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';

$leftMenu = AboutMenus::leftMenu();

?>
<h1 class="text-center"><?= Html::encode($this->title) ?></h1>
<br>

<div class="about-index">

    <div class="row">

        <div class="col-sm-3">
            <?= Nav::widget($leftMenu) ?>
        </div>

        <div class="col-sm-6 text-center">

            <p> Матеріали до дипломної роботи: <br>
                "<strong>
                    Інтернет-магазин комп'ютерної техніки
                    на базі Yii Framework
                </strong>"
            </p>
            <p> Керівник - <strong>Гроза П.М.</strong> </p>
            <p> Виконавець - <strong>Колос Д.С.</strong> </p>

        </div>

    </div>

</div>
