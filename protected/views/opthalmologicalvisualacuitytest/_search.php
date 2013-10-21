<?php
/* @var $this OpthalmologicalvisualacuitytestController */
/* @var $model Opthalmologicalvisualacuitytest */
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
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'etdrsnumberofletters'); ?>
		<?php echo $form->textField($model,'etdrsnumberofletters'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'learesult'); ?>
		<?php echo $form->textField($model,'learesult',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fingercount'); ?>
		<?php echo $form->textField($model,'fingercount',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'handmovement'); ?>
		<?php echo $form->textField($model,'handmovement',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lightperception'); ?>
		<?php echo $form->textField($model,'lightperception',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->