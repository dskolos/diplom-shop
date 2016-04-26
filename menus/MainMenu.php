<?php
namespace app\menus;

use Yii;
use yii\helpers\Html;

class MainMenu {

    static function getMenu() {

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

        $menu = [
            'options' => ['class' => 'navbar-nav navbar-right'],
            'encodeLabels' => false,
            'items' => [
                ['label' => "Техніка", 'url' => ['/tech/index']],
            ],
        ];

        if ($role > 1) {
            $menu['items'][] = ['label' => "Продаж", 'url' => ['/sell/index']];
        }

        if ($role > 2) {
            $menu['items'][] = [
//                'label' => "admin",
                'label' => '<span class="glyphicon glyphicon-wrench"></span>',
                'url' => ['/admin/default/index'],
//                'url' => ['/admin/index'],
                'options' => [
                    'title' => 'Адміністрування',
                ],
                'active' =>
                    Yii::$app->controller->getUniqueId() === 'admin/default'
                    || Yii::$app->controller->getUniqueId() === 'admin/category'
                    || Yii::$app->controller->getUniqueId() === 'admin/brand'
                    || Yii::$app->controller->getUniqueId() === 'admin/product'
            ];
        }

        if ($role > 4) {
            $menu['items'][] = [
//                'label' => ' <span class="glyphicon glyphicon-wrench"></span> ',
                'label' => '<span class="glyphicon glyphicon-info-sign"></span>',
                'url' => ['/tools/info/index'],
                'options' => [
                    'title' => 'Інформація',
                ],
                'active' => (
//                        Yii::$app->controller->getRoute() === 'tool/index'
//                    ||  Yii::$app->controller->getRoute() === 'tool/inshe'
//                    ||
                        Yii::$app->controller->getUniqueId() === 'tool'
                        || Yii::$app->controller->getUniqueId() === 'tools/default'
                        || Yii::$app->controller->getUniqueId() === 'tools/info'
                ),
            ];
        }

        if ($role > 5) {
            $menu['items'][] = [
//                'label' => ' <span class="glyphicon glyphicon-wrench"></span> ',
                'label' => '<span class="glyphicon glyphicon-film"></span>',
                'url' => ['/db/default/index'],
                'options' => [
                    'title' => 'Links',
                ],
                'active' => (
                        Yii::$app->controller->getUniqueId() === 'db/default'
                        || Yii::$app->controller->getUniqueId() === 'db/note'
                        || Yii::$app->controller->getUniqueId() === 'db/tip'
                        || Yii::$app->controller->getUniqueId() === 'db/tips'
                        || Yii::$app->controller->getUniqueId() === 'db/category'
                ),
            ];
        }

//        $menu['items'][] = ['label' => 'About', 'url' => ['/site/about']];
        $menu['items'][] =
            [
                'label' => 'About',
                'url' => ['/about/index'],
                'active' => Yii::$app->controller->getUniqueId() === 'about'

            ];
//        $menu['items'][] = ['label' => Yii::$app->controller->getUniqueId(), 'url' => ['#'] ];

        $menu['items'][] =
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
                    ['class' => 'btn btn-info logout-btn']
                )
                . Html::endForm()
                . '</li>'
            );

        return $menu;
    }
}
