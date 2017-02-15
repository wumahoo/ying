<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Article;
use Yii;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $article = new Article();
        $artList = $article->listLastArticle(10);

        //$user = Yii::$app->user->id;
        var_dump(Yii::$app->user);

        return $this->render('index', ['articleData' => $artList]);
    }


}
