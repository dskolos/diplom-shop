<?php
use yii\bootstrap\Nav;
use app\menus\ToolsMenus;
/* @var $this yii\web\View */

$leftMenu = ToolsMenus::LeftMenu();
$topMenu = ToolsMenus::TopMenu();

$this->title = 'Tools';

?>

<h1 class="text-center">
    <span class="glyphicon glyphicon-wrench"></span>
    <span> <?= $this->title ?> </span>
</h1>

<div class="row">

    <div class="col-sm-3">
        <?= Nav::widget($leftMenu) ?>
    </div>

    <div class="col-sm-9">

        <?= Nav::widget($topMenu) ?>

        <div>
            <h3 class="text-center"> <span> Список літератури </span> </h3>
        </div>

        <br>

        <ol>
            <li>
                <p> Сафронов М. Разработка веб-приложений в Yii 2. - М.: ДМК Пресс, 2015. - 392 с.: ил. </p>
            </li>
            <li>
                <p> Зандстра, Мэтт. PHP: объекты, шаблоны и методики программирования, 4-е изд. :
                    Пер. с англ. - М.: ООО "И.Д. Вильямс". 2015. - 576 с.: ил. </p>
            </li>
        </ol>

    </div>

</div>
