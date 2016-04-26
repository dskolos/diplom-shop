<?php
namespace app\controllers;

use yii\web\Controller;

class AboutController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPowered() {
        return $this->render('powered');
    }

}
