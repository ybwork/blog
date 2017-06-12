<?php
	use yii\helpers\Html;
?>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Themes</th>
      </tr>
    </thead>
    <tbody>
      	<?php foreach($authors as $author): ?>
	      <tr>
	        <td><?= Html::encode("{$author['id']}") ?></td>
	        <td><?= Html::encode("{$author['name']}") ?></td>
	        <td><?= Html::encode("{$author['themes']}") ?></td>
	      </tr>
      	<?php endforeach; ?>
    </tbody>
</table>