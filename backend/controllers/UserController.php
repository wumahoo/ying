<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/8/10 0010
 * Time: 上午 11:00
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;

class UserController extends Controller{

    public function actionIndex(){

        return $this->render('index');
    }
}
