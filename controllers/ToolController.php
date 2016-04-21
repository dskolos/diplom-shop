<?php
namespace app\controllers;

use yii\web\Controller;

class ToolController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionList() {
        return $this->render('list');
    }

    public function actionInshe() {
        return $this->render('inshe');
    }

}
