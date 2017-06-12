<?

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Author extends ActiveRecord
{
	public static function tableName()
	{
		return '{{authors}}';
	}

    public function getAuthors()
    {
        $authors = Yii::$app->db->createCommand(
        	"SELECT a.id, a.name, GROUP_CONCAT(DISTINCT t.name ORDER BY t.name ASC SEPARATOR ', ') AS themes FROM authors a LEFT JOIN themes t ON a.id = t.author_id GROUP BY a.id"
        )->queryAll();

    	return $authors;
    }
}