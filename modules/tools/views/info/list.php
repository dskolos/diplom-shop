<?php
use yii\bootstrap\Nav;
use app\menus\ToolsMenus;

/* @var $this yii\web\View */

//$leftMenu = ToolsMenus::LeftMenu();
//$topMenu = ToolsMenus::TopMenu();

$this->title = 'Список літератури';

?>

<h1 class="text-center"><span class="glyphicon glyphicon-info-sign"></span> Інформація </h1>
<br>

<div class="tools-info-list">

    <div class="row">

        <div class="col-sm-3">
            <?= Nav::widget(ToolsMenus::LeftMenu()) ?>
        </div>

        <div class="col-sm-9">

            <div>
                <h3 class="text-center"> Список літератури </h3>
                <br>

                <ol>
                    <li>
                        <p> Сафронов М. Разработка веб-приложений в Yii 2. - М.: ДМК Пресс, 2015. - 392 с.: ил. </p>
                    </li>
                    <li>
                        <p> Зандстра, Мэтт. PHP: объекты, шаблоны и методики программирования, 4-е изд. :
                            Пер. с англ. - М.: ООО "И.Д. Вильямс". 2015. - 576 с.: ил.
                        </p>
                    </li>
                    <li>
                        <p>
                            Повний посібник (v2): Про Yii - Українська спільнота Yii Framework –
                            https://yiiframework.com.ua/uk/doc/guide/2/
                        </p>
                    </li>
                </ol>

            </div>

        </div>

    </div>

</div>
