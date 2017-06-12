<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Author;

class AuthorController extends Controller
{
	public function getViewPath()
	{
		return Yii::getAlias('@app/views/site');
	}

	public function actionIndex()
	{
		$authors = Author::getAuthors();

		return $this->render('authors', [
			'authors' => $authors,
		]);
	}
}