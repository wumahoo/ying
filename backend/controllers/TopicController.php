<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/8/8 0008
 * Time: 下午 5:18
 */

namespace backend\controllers;

use Yii;
use yii\web\controller;

class TopicController extends Controller{

    public function actionIndex(){
        return $this->render('index',['message'=>'this is topic']);
    }
}