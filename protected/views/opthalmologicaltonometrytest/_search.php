<?php
/* @var $this OpthalmologicaltonometrytestController */
/* @var $model Opthalmologicaltonometrytest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'testid'); ?>
		<?php echo $form->textField($model,'testid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eye'); ?>
		<?php echo $form->textField($model,'eye',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vocalaudiogram'); ?>
		<?php echo $form->textField($model,'vocalaudiogram',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vocalvpp40'); ?>
		<?php echo $form->textField($model,'vocalvpp40'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vocalvmf40'); ?>
		<?php echo $form->textField($model,'vocalvmf40'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vocalvff40'); ?>
		<?php echo $form->textField($model,'vocalvff40'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonalaudiogram'); ?>
		<?php echo $form->textField($model,'tonalaudiogram',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonal250'); ?>
		<?php echo $form->textField($model,'tonal250'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonal500'); ?>
		<?php echo $form->textField($model,'tonal500'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonal1000'); ?>
		<?php echo $form->textField($model,'tonal1000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonal2000'); ?>
		<?php echo $form->textField($model,'tonal2000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonal3000'); ?>
		<?php echo $form->textField($model,'tonal3000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonal4000'); ?>
		<?php echo $form->textField($model,'tonal4000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonal6000'); ?>
		<?php echo $form->textField($model,'tonal6000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonal8000'); ?>
		<?php echo $form->textField($model,'tonal8000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otospontanic'); ?>
		<?php echo $form->textField($model,'otospontanic',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otoprovoced'); ?>
		<?php echo $form->textField($model,'otoprovoced',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otodistortionproducts'); ?>
		<?php echo $form->textField($model,'otodistortionproducts',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->