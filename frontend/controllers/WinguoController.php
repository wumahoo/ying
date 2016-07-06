<?php
namespace frontend\controllers;

use yii\web\Controller;

class WinguoController extends Controller {

	public function actionIndex() {
		return $this->render('index', ['hel' => 'I work Now']);
	}
}
