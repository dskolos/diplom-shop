<?php
namespace app\modules\tools\controllers;

use yii\web\Controller;

class InfoController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionInshe() {
        return $this->render('inshe');
    }

}
