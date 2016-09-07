<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/9/2 0002
 * Time: 下午 2:14
 */
namespace frontend\controllers;

use yii\web\Controller;


class CookingController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index', ['message' => 'hello index']);
    }
}