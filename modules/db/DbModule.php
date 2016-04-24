<?php

namespace app\modules\db;

/**
 * db module definition class
 */

use yii\base\Module;

class DbModule extends Module {

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\db\controllers';

    /**
     * @inheritdoc
     */
    public function init() {

        parent::init();

        // custom initialization code goes here
    }
}
