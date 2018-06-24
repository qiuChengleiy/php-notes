<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<p>请输入以下信息</p>

<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model,'name') ?>
	<?= $form->field($model,'email') ?> 
	<!-- //自定义标签 指的的是name -->
<!-- $form->field($model, 'name')->label('<h1> Name')  -->
	<div class="form-group">
		<?= Html::submitButton('Submit',['class'=> 'btn btn-primary'])
		?>
	</div>

<?php ActiveForm::end(); ?>

