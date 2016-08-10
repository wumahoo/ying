<?php
/**
 * 话题管理
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/8/8 0008
 * Time: 下午 5:18
 */

namespace backend\controllers;

use Yii;
use yii\web\controller;
use app\models\topic;

class TopicController extends Controller{

    public function actionIndex(){

        $model = new Topic();
        //insert a new topic to topic table
        $this -> insertTopic();

        return $this->render('index',['model'=>$model]);
    }

    /**
     * Insert Topic
     * @return boolean
     */
    protected function insertTopic(){


    }
}