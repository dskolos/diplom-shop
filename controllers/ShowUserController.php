<?php
/**
 * Created by PhpStorm.
 * User: prog-510
 * Date: 18.04.2016
 * Time: 0:32
 */

namespace app\controllers;

use yii\web\Controller;

class ShowUserController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }


}
