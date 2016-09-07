<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/9/2 0002
 * Time: 下午 5:04
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class PersonalController extends Controller{


    public function actionIndex(){

        return $this->render('index');
    }
}