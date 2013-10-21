<?php
/* @var $this PatientfamilydetailsController */
/* @var $model Patientfamilydetails */
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
		<?php echo $form->label($model,'patientid'); ?>
		<?php echo $form->textField($model,'patientid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentsorigin'); ?>
		<?php echo $form->textField($model,'parentsorigin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sporadicorfamily'); ?>
		<?php echo $form->textField($model,'sporadicorfamily',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consanguinity'); ?>
		<?php echo $form->textField($model,'consanguinity',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberofaffectedfamily'); ?>
		<?php echo $form->textField($model,'numberofaffectedfamily'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'children'); ?>
		<?php echo $form->textField($model,'children',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberofchildrenaffected'); ?>
		<?php echo $form->textField($model,'numberofchildrenaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberofchildrennonaffected'); ?>
		<?php echo $form->textField($model,'numberofchildrennonaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberofchildrenunknownstatus'); ?>
		<?php echo $form->textField($model,'numberofchildrenunknownstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'siblings'); ?>
		<?php echo $form->textField($model,'siblings',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberofsiblingsaffected'); ?>
		<?php echo $form->textField($model,'numberofsiblingsaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberofsiblingsnonaffected'); ?>
		<?php echo $form->textField($model,'numberofsiblingsnonaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberofsiblingsunknownstatus'); ?>
		<?php echo $form->textField($model,'numberofsiblingsunknownstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'twins'); ?>
		<?php echo $form->textField($model,'twins',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberoftwinsaffected'); ?>
		<?php echo $form->textField($model,'numberoftwinsaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberoftwinsnotaffected'); ?>
		<?php echo $form->textField($model,'numberoftwinsnotaffected'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberoftwinsunknownstatus'); ?>
		<?php echo $form->textField($model,'numberoftwinsunknownstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedigreeavailable'); ?>
		<?php echo $form->textField($model,'pedigreeavailable',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->