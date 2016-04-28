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

//        $menu['items'][] = ['label' => Yii::$app->controller->getUniqueId(), 'url' => ['#'] ];

//        $menu['items'][] =
//            Yii::$app->user->isGuest ? (
//                '<li>' .
//                Html::beginForm(['/site/login'], 'post')
//                . Html::submitButton(
//                    'Увійти',
//                    ['class' => 'btn btn-success login-btn']
//                )
//                . Html::endForm()
//                . '</li>'
//
//            ) : (
//                '<li class="user-li">' . 'Користувач:' .
//                "<span style='color: $color'> $currentUser->name <span> " .
//                '</li>' .
//                '<li>' .
//                Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Вийти',
//                    ['class' => 'btn btn-info logout-btn']
//                )
//                . Html::endForm()
//                . '</li>'
//            );

        if (!Yii::$app->user->isGuest) {
            $menu['items'][] = (
                '<li class="user-li">' . 'Користувач:' .
                "<span style='color: $color'> $currentUser->name <span> " .
                '</li>'
            );
        };

        if ($role > 0) {
            $menu['items'][] =
                [
                    'label' => 'Замовлення',
                    'url' => ['/user/index'],
                    'active' => Yii::$app->controller->getUniqueId() === 'user'
                ];
        };

        if (!Yii::$app->user->isGuest) {
            $menu['items'][] = (
                '<li>' .
                Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Вийти',
                    ['class' => 'btn btn-info logout-btn']
                )
                . Html::endForm()
                . '</li>'
            );
        } else {
            $menu['items'][] = (
                '<li>' .
                Html::beginForm(['/site/login'], 'post')
                . Html::submitButton(
                    'Увійти',
                    ['class' => 'btn btn-success login-btn']
                )
                . Html::endForm()
                . '</li>'
            );
        };

        $menu['items'][] =
            [
                'label' => 'About',
                'url' => ['/about/index'],
                'active' => Yii::$app->controller->getUniqueId() === 'about'
            ];

        return $menu;
    }

    static function getAdminMenu() {

        $currentUser = Yii::$app->user->identity;
        $role = $currentUser->role;

        $menu = [
            'options' => ['class' => 'navbar-nav'],
            'encodeLabels' => false,
            'items' => [
                '<li class="admin-li"> Управління:  </li>',
            ],
        ];

        if ($role > 1) {
            $menu['items'][] = [
                'label' => "<span class='glyphicon glyphicon-glass'></span> &nbsp; Продаж",
                'url' => ['/sell/index']];
        }

        if ($role > 2) {
            $menu['items'][] = [
                'label' => '<span class="glyphicon glyphicon-wrench"> Адміністрування </span>',
                'url' => ['/admin/default/index'],
                'active' =>
                    Yii::$app->controller->getUniqueId() === 'admin/default'
                    || Yii::$app->controller->getUniqueId() === 'admin/category'
                    || Yii::$app->controller->getUniqueId() === 'admin/brand'
                    || Yii::$app->controller->getUniqueId() === 'admin/product'
            ];
        }

        if ($role > 4) {
            $menu['items'][] = [
                'label' => '<span class="glyphicon glyphicon-info-sign"> Інформація </span>',
                'url' => ['/tools/info/index'],
                'active' => (
                        Yii::$app->controller->getUniqueId() === 'tool'
                        || Yii::$app->controller->getUniqueId() === 'tools/default'
                        || Yii::$app->controller->getUniqueId() === 'tools/info'
                ),
            ];
        }

        if ($role > 5) {
            $menu['items'][] = [
                'label' => '<span class="glyphicon glyphicon-film"> Links </span>',
                'url' => ['/db/default/index'],
//                'options' => [
//                    'title' => 'Links',
//                ],
                'active' => (
                        Yii::$app->controller->getUniqueId() === 'db/default'
                        || Yii::$app->controller->getUniqueId() === 'db/note'
                        || Yii::$app->controller->getUniqueId() === 'db/tip'
                        || Yii::$app->controller->getUniqueId() === 'db/tips'
                        || Yii::$app->controller->getUniqueId() === 'db/category'
                ),
            ];
        }

        return $menu;
    }
}
