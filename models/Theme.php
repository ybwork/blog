<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\Query;

class Theme extends ActiveRecord
{

	public static function tableName()
	{
		return '{{themes}}';
	}

	public function getThemes()
	{
		$query = new Query();
		$themes = $query->select([
			'author_id' => 't.author_id', 
			'name' => 't.name', 
			'id' => 'a.id', 
			'author' => 'a.name'
		])
		->from(['themes t', 'authors a'])
		->where('t.author_id = a.id')
		->orderBy('t.id DESC')
		->all();

		return $themes;
	}

	public function saveTheme($author_id, $name)
	{
		$theme = new Theme();
		$theme->author_id = $author_id;
		$theme->name = $name;
		$theme->save();

		return 'all right';
	}
}