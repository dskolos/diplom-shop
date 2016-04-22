<?php
namespace app\menus;

use Yii;

class AdminMenus {

    static function getTopMenu() {
        return [
            'activateItems' => true,
            'activateParents' => true,
//            'encodeLabels' => true,
            'encodeLabels' => false,
            'options' => [
                'class' => 'nav nav-tabs nav-justified',
            ],
            'items' => [
                [
                    'label' => '<strong>Таблиці:</strong>',
                    'url' => ['/admin/default/index'],
                ],
                [
                    'label' => 'Таблиця 1',
                    'url' => ['#'],
                ],
                [
                    'label' => 'Таблиця 2',
                    'url' => ['#'],
                ],
                [
                    'label' => 'Таблиця 3',
                    'url' => ['#'],
                ],
                [
                    'label' => 'Таблиця 4',
                    'url' => ['#'],
                ],
                [
                    'label' => 'Таблиця 5',
                    'url' => ['#'],
                ],
                [
                    'label' => 'Таблиця 6',
                    'url' => ['#'],
                ],
                [
                    'label' => 'Таблиця 7',
                    'url' => ['#'],
                ],
            ]
        ];
    }
}
