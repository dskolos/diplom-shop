<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
<!--    <div class="container almost-white">     ===============-->
<!--    <div class="container almost-white">     ===============-->

    <?php
    NavBar::begin([
        'brandLabel' => 'DIPLOM SHOP',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);

    $currentUser = Yii::$app->user->identity;
    $role = $currentUser->role;
    $color = 'forestgreen';
    if ($role == 2) {
        $color = 'orange';
    }
    if ($role == 3) {
        $color = 'red';
    }
    if ($role == 5) {
        $color = 'brown';
    }

    $items = [
        ['label' => "Техніка", 'url' => ['/tech/index']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
        ['label' => 'About', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ? (
                '<li>' .
                Html::beginForm(['/site/login'], 'post')
                . Html::submitButton(
                    'Увійти',
                    ['class' => 'btn btn-success login-btn']
                )
                . Html::endForm()
                . '</li>'

            ) : (
                '<li class="user-li">' . 'Користувач:' .
                "<span style='color: $color'> $currentUser->name <span> " .
                '</li>' .
                '<li>' .
                  Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Вийти',
                    ['class' => 'btn btn-primary logout-btn']
                )
                . Html::endForm()
                . '</li>'
            ),
    ];

    if ($role > 1) {
        $items[] = ['label' => "Продаж", 'url' => ['/sell/index']];
    }
    if ($role > 2) {
        $items[] = ['label' => "admin", 'url' => ['/admin/index']];
    }
    if ($role > 4) {
        $items[] = [
            'label' => ' <span class="glyphicon glyphicon-wrench"></span> ',
            'url' => ['/tools/index']
        ];
    }

//    $items[] = ['label' => 'About', 'url' => ['/site/about']];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items,
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
<!--    </div>-->
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; DIPLOM SHOP 2016</p>
<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
        <p class="pull-right">Powered by <a href="http://www.yiiframework.com/" target="_blank">Yii Framework</a></p>
<!--        <p class="pull-right">Powered by Yii Framework</p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
