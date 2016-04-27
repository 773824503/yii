<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class HomeController extends Controller
{

    public function actionMy()
    {
        echo "hello world";die;
        return $this->render('index');
    }
}
