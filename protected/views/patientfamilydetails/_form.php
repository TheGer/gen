<?php
/* @var $this PatientfamilydetailsController */
/* @var $model Patientfamilydetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patientfamilydetails-form',
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
		<?php echo $form->labelEx($model,'parentsorigin'); ?>
		<?php echo $form->textField($model,'parentsorigin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'parentsorigin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sporadicorfamily'); ?>
		<?php echo $form->textField($model,'sporadicorfamily',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'sporadicorfamily'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consanguinity'); ?>
		<?php echo $form->textField($model,'consanguinity',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'consanguinity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberofaffectedfamily'); ?>
		<?php echo $form->textField($model,'numberofaffectedfamily'); ?>
		<?php echo $form->error($model,'numberofaffectedfamily'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'children'); ?>
		<?php echo $form->textField($model,'children',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'children'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberofchildrenaffected'); ?>
		<?php echo $form->textField($model,'numberofchildrenaffected'); ?>
		<?php echo $form->error($model,'numberofchildrenaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberofchildrennonaffected'); ?>
		<?php echo $form->textField($model,'numberofchildrennonaffected'); ?>
		<?php echo $form->error($model,'numberofchildrennonaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberofchildrenunknownstatus'); ?>
		<?php echo $form->textField($model,'numberofchildrenunknownstatus'); ?>
		<?php echo $form->error($model,'numberofchildrenunknownstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'siblings'); ?>
		<?php echo $form->textField($model,'siblings',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'siblings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberofsiblingsaffected'); ?>
		<?php echo $form->textField($model,'numberofsiblingsaffected'); ?>
		<?php echo $form->error($model,'numberofsiblingsaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberofsiblingsnonaffected'); ?>
		<?php echo $form->textField($model,'numberofsiblingsnonaffected'); ?>
		<?php echo $form->error($model,'numberofsiblingsnonaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberofsiblingsunknownstatus'); ?>
		<?php echo $form->textField($model,'numberofsiblingsunknownstatus'); ?>
		<?php echo $form->error($model,'numberofsiblingsunknownstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'twins'); ?>
		<?php echo $form->textField($model,'twins',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'twins'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberoftwinsaffected'); ?>
		<?php echo $form->textField($model,'numberoftwinsaffected'); ?>
		<?php echo $form->error($model,'numberoftwinsaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberoftwinsnotaffected'); ?>
		<?php echo $form->textField($model,'numberoftwinsnotaffected'); ?>
		<?php echo $form->error($model,'numberoftwinsnotaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberoftwinsunknownstatus'); ?>
		<?php echo $form->textField($model,'numberoftwinsunknownstatus'); ?>
		<?php echo $form->error($model,'numberoftwinsunknownstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedigreeavailable'); ?>
		<?php echo $form->textField($model,'pedigreeavailable',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'pedigreeavailable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->