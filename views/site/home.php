<?
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<?php 

	$form = ActiveForm::begin([
		'action' => ['theme/store'],
		'options' => ['class' => 'form-horizontal'],
	]);

	$items = [];

	$params = [
		'prompt' => '',
	];
	
	foreach($authors as $author) {
		$items[$author['id']] = $author['name'];
	}

?>
	<?= $form->field($model, 'author_id')->dropDownList($items, $params)->label('Author') ?>
	<?= $form->field($model, 'name')->label('Theme') ?>
	<div class="form-group">
		<?= Html::submitButton('Add', ['class' => 'btn btn-primary col-md-12']) ?>
	</div>
	
<?php ActiveForm::end(); ?>
