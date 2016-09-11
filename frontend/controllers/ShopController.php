<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/9/2 0002
 * Time: 下午 4:32
 */

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class ShopController
 * @package frontend\controllers
 */
class ShopController extends Controller
{

    /**
     * shop Home
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index', ['shop' => 'this is shop']);
    }
}