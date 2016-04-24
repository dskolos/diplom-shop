<?php
namespace app\menus;

use Yii;

class AboutMenus {

    static function leftMenu() {
        return [
            'activateItems' => true,
            'activateParents' => true,
            'encodeLabels' => true,
            'options' => [
                'class' => 'nav nav-pills nav-stacked',
            ],
            'items' => [
//                '<br>',
//                '<h3 class="text-center"> Зміст </h3>',
//                '<br>',
                [
                    'label' => 'About',
                    'url' => ['/about/index'],
                ],
                [
                    'label' => 'Список літератури',
                    'url' => ['/about/list'],
                ],
            ]
        ];
    }
}
