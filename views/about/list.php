<?php
use yii\bootstrap\Nav;
use app\menus\AboutMenus;

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Список літератури';
//$this->params['breadcrumbs'][] = $this->title;

$leftMenu = AboutMenus::leftMenu();

?>
<div class="about-index">


    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <br>

    <div class="row">

        <div class="col-sm-3">
            <?= Nav::widget($leftMenu) ?>
        </div>

        <div class="col-sm-7">


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

    </div>

</div>
