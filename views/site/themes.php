<?php
	use yii\helpers\Html;
?>

<ul>
	<?php foreach($themes as $theme): ?>
		<blockquote>
		  <p><?= Html::encode("{$theme['name']}") ?></p>
		  <footer><cite title="Source Title">Author: </cite><?= Html::encode("{$theme['author']}") ?></footer>
		</blockquote>
	<?php endforeach; ?>
</ul>