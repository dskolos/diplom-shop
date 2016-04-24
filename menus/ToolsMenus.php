<?php
namespace app\menus;

use Yii;

class ToolsMenus {

    static function topMenu() {
        return [
            'activateItems' => true,
            'activateParents' => true,
            'encodeLabels' => true,
            'options' => [
//                'class' => 'nav nav-pills nav-tabs nav-justified',
//                'class' => 'nav nav-pills nav-justified',
                'class' => 'nav nav-tabs nav-justified',
            ],
            'items' => [
                [
                    'label' => 'Інформація',
                    'url' => ['/tool/index'],
//                    'options' => [
//                        'class' => 'btn btn-success',
//                    ],
                    'active' => (
//                        Yii::$app->controller->getRoute() === 'tool/index'
//                    ||  Yii::$app->controller->getRoute() === 'tool/inshe'
//                    ||
                        Yii::$app->controller->getUniqueId() === 'tool'
                    ),

                ],
                [
                    'label' => 'База даних',
                    'url' => ['/tools/default'],
                    'active' => (
                        Yii::$app->controller->getUniqueId() === 'tools/default'
                    ),
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
