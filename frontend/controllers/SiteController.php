<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Article;

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


        return $this->render('index', ['articleData' => $artList]);
    }


}
