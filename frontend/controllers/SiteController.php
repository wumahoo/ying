<?php
namespace frontend\controllers;

use Yii;
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
        $art = new Article();
        $a = $art->listLastArticle(10);

        return $this->render('index', ['data' => $a]);
    }


}
