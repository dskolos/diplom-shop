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
                'class' => 'nav nav-pills',
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
                    'label' => 'ddb - Notes',
                    'url' => ['/db/note/index'],
                ],
                [
                    'label' => 'ddb - Categories',
                    'url' => ['/db/category/index'],
                ],
            ]
        ];
    }

    static function leftMenu() {
        return [
            'activateItems' => true,
            'activateParents' => true,
            'encodeLabels' => true,
            'options' => [
                'class' => 'nav nav-pills nav-stacked',
            ],
            'items' => [
                [
                    'label' => 'Схеми бази даних',
                    'url' => ['/tools/info/index'],
                ],
                [
                    'label' => 'Інше...',
                    'url' => ['/tools/info/inshe'],
                ],
            ]
        ];
    }

    static function dbMenu() {
        return [
            'activateItems' => true,
            'activateParents' => true,
            'encodeLabels' => true,
            'options' => [
                'class' => 'nav nav-pills nav-stacked',
            ],
            'items' => [
                '<br>',
                '<h3 class="text-center"> БД... </h3>',
                '<br>',
                [
                    'label' => 'БД...',
                    'url' => ['/tools/default/index'],
                ],
                [
                    'label' => 'Інше...',
                    'url' => ['/tool/inshe'],
                ],
            ]
        ];
    }

}
