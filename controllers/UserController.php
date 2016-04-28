<?php

namespace app\controllers;
use yii\web\Controller;

class UserController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionOrder() {
        return $this->render('order');
    }

}
