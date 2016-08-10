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
use yii\widgets\ActiveForm;
use yii\web\Response;
//use yii\filters\AccessControl;

class TopicController extends Controller{

    /*public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'insertopic','hello'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }*/

    public function actionIndex(){

        $topic = new Topic();
        //insert a new topic to topic table

        return $this->render('index',['model'=>$topic]);
    }

    /**
     * ajax validate
     * @return  array;
     */
    public function actionValidate(){
        $topic = new Topic();
        if (Yii::$app->request->isAjax && $topic->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($topic);
        }
    }

    /**
     * Insert Topic
     * @return boolean
     */
    public function actionInserttopic(){

        $topic = new Topic();

        if ($topic->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            //insert into topic table
            $topic->save();
        }


        $array = [
            'msg' => 'insert topic successfull',
            'status' => '200'
        ];

        return json_encode($array);
    }


}