<?php
/* @var $this PatientfamilyController */
/* @var $model Patientfamily */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patientfamily-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'patientid'); ?>
		<?php echo $form->textField($model,'patientid'); ?>
		<?php echo $form->error($model,'patientid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familyid'); ?>
		<?php echo $form->textField($model,'familyid'); ?>
		<?php echo $form->error($model,'familyid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->