<?php
/* @var $this PatientfamilyController */
/* @var $model Patientfamily */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'patient_familyid'); ?>
		<?php echo $form->textField($model,'patient_familyid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patientid'); ?>
		<?php echo $form->textField($model,'patientid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familyid'); ?>
		<?php echo $form->textField($model,'familyid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->