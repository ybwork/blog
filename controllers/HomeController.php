<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Author;
use app\models\ThemeForm;

class HomeController extends Controller
{
	public function getViewPath()
	{
	    return Yii::getAlias('@app/views/site');
	}

	public function actionIndex()
	{
		$authors = Author::getAuthors();
		$model = new ThemeForm();

		return $this->render('home', [
			'authors' => $authors,
			'model' => $model,
		]);
	}
}