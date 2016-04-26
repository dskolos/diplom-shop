<?php
namespace app\menus;
use Yii;

class DbMenus {

    static function topMenu() {
        return [
            'activateItems' => true,
            'activateParents' => true,
            'encodeLabels' => false,
            'options' => [
//                'class' => 'nav nav-pills nav-justified',
                'class' => 'nav nav-pills nav-first',
            ],
            'items' => [
                [
                    'label' => '<span class="glyphicon glyphicon-film"></span> ' .
                        '<strong> DB </strong> ',
                    'url' => ['/db/default/index'],
//                    'options' => [
//                        'class' => 'btn btn-success',
//                    ],
//                    'active' => (
//                        Yii::$app->controller->getRoute() === 'tool/index'
//                    ||  Yii::$app->controller->getRoute() === 'tool/inshe'
//                    ||
//                        Yii::$app->controller->getUniqueId() === 'tool'
//                    ),

                ],
                [
                    'label' => 'ddb - Note',
                    'url' => ['/db/note/index'],
                ],
                [
                    'label' => 'ddb - Category',
                    'url' => ['/db/category/index'],
                ],
                [
                    'label' => 'ddb - Tip',
                    'url' => ['/db/tip/index'],
                ],
            ]
        ];
    }

    static function secondMenu() {
        return [
            'activateItems' => true,
            'activateParents' => true,
            'encodeLabels' => false,
            'options' => [
//                'class' => 'nav nav-pills nav-justified',
                'class' => 'nav nav-pills nav-second',
            ],
            'items' => [
                [
                    'label' => '<span class="glyphicon glyphicon-film"></span> ' .
                        '<strong> Ссылки </strong> ',
                    'url' => ['/db/default/index'],
//                    'options' => [
//                        'class' => 'btn btn-success',
//                    ],
//                    'active' => (
//                        Yii::$app->controller->getRoute() === 'tool/index'
//                    ||  Yii::$app->controller->getRoute() === 'tool/inshe'
//                    ||
//                        Yii::$app->controller->getUniqueId() === 'tool'
//                    ),

                ],
                [
                    'label' => 'Tips',
                    'url' => ['/db/tips/index'],
                ],
            ]
        ];
    }

}
