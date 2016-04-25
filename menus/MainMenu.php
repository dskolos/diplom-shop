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
//                'url' => ['/admin/default/index'],
                'url' => ['/admin/index'],
                'title' => 'aaa',
                'active' =>
                    Yii::$app->controller->getUniqueId() === 'admin'
//                    || Yii::$app->controller->getUniqueId() === 'admin/brands'

            ];
        }

        if ($role > 4) {
            $menu['items'][] = [
//                'label' => ' <span class="glyphicon glyphicon-wrench"></span> ',
                'label' => '<span class="glyphicon glyphicon-info-sign"></span>',
                'url' => ['/tools/info/index'],
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
                'active' => (
                        Yii::$app->controller->getUniqueId() === 'db/default'
                        || Yii::$app->controller->getUniqueId() === 'db/note'
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
