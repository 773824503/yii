<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\myfunction\Method;

class HomeController extends Controller
{

    public function actionMy()
    {
        $method = new Method();
        $res = $method->add(30,30);
        Yii::$app->redis->set('a',123);
        echo Yii::$app->redis->get('a');
        echo "<br>";
        echo "hello world  ".$res;die;
        return $this->render('index');
    }
}
