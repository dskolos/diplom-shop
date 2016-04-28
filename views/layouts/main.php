<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\menus\MainMenu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php

    $role = Yii::$app->user->identity->role;

    if ($role > 1) {
        echo "<img src='/i/a-p-i.jpg' class='navbar-diplom-shop-admin-image'>";
        NavBar::begin([
//            'brandLabel' => ' управління ',
//            'brandUrl' => Yii::$app->homeUrl,
//            'brandUrl' => false,
            'options' => [
                'class' => "navbar-inverse navbar-fixed-top navbar-diplom-shop-admin",
            ],
        ]);
        echo Nav::widget(MainMenu::getAdminMenu());
        NavBar::end();
    }

    if ($role > 1) {
        $class = "navbar-default navbar-fixed-top navbar-diplom-shop";
    } else {
        $class = "navbar-default navbar-fixed-top";
    };

    NavBar::begin([
        'brandLabel' => 'DIPLOM SHOP',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => $class,
        ],
    ]);

    echo Nav::widget(MainMenu::getMenu());

    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink' => false,
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'encodeLabels' => false,
        ]) ?>
        <?= $content ?>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; DIPLOM SHOP 2016</p>
        <p class="pull-right">Powered by <a href="http://www.yiiframework.com/" target="_blank">Yii Framework</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
