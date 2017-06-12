<?

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Theme;
use app\models\ThemeForm;

class ThemeController extends Controller
{

	public function getViewPath()
	{
	    return Yii::getAlias('@app/views/site');
	}

	public function actionIndex()
	{
		$themes = Theme::getThemes();

		return $this->render('themes', [
			'themes' => $themes,
		]);
	}

	public function actionStore()
	{
		$model = new ThemeForm();

		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$user_id = $model['author_id'];
			$name = $model['name'];
			Theme::saveTheme($user_id, $name);
			
			return $this->redirect(['/themes']);
		} else {
			return $this->render('home');
		}
	}
}