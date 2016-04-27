<?php
namespace app\myfunction;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class Method
{
    
  public function add($a,$b)
  {
       return $a+$b;
  }

}
