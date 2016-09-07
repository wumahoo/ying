<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/9/2 0002
 * Time: 下午 4:32
 */

namespace frontend\controllers;

use yii;
use yii\web\Controller;

class ShopController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index', ['shop' => 'this is shop']);
    }
}