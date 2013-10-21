<?php
/* @var $this PatientcenterController */
/* @var $model Patientcenter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patientcenter-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'patientcenterid'); ?>
		<?php echo $form->textField($model,'patientcenterid'); ?>
		<?php echo $form->error($model,'patientcenterid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centeridA'); ?>
		<?php echo $form->textField($model,'centeridA'); ?>
		<?php echo $form->error($model,'centeridA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centeridB'); ?>
		<?php echo $form->textField($model,'centeridB'); ?>
		<?php echo $form->error($model,'centeridB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centeridC'); ?>
		<?php echo $form->textField($model,'centeridC'); ?>
		<?php echo $form->error($model,'centeridC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctoridA'); ?>
		<?php echo $form->textField($model,'doctoridA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'doctoridA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctoridB'); ?>
		<?php echo $form->textField($model,'doctoridB',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'doctoridB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctoridC'); ?>
		<?php echo $form->textField($model,'doctoridC',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'doctoridC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'systemid'); ?>
		<?php echo $form->textField($model,'systemid',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'systemid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patientid'); ?>
		<?php echo $form->textField($model,'patientid'); ?>
		<?php echo $form->error($model,'patientid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->