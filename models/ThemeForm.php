<?

namespace app\models;

use yii\base\Model;

class ThemeForm extends Model
{
	public $author_id;
	public $name;

	public function rules()
	{
		return [
			[['author_id', 'name'], 'required'],
		];
	}
}