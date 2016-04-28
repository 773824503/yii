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
        // Yii::$app->redis->set('a',123);
        //echo Yii::$app->redis->get('a');
        //Yii::$app->view;
        //echo "<br>";
        //echo "hello world  ".$res;die;
        //return $this->render('index');
        //$this->smarty->assign('abc',$res);
        //$this->smarty->display('index.tpl');
        //return $this->render('app\views\site\index.tpl',['abc'=>$res]);
        return $this->renderPartial('index.tpl', ['username' => 'zhangsan']); 
    }
}
