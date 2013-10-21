<?php
/* @var $this PatientcenterController */
/* @var $model Patientcenter */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'patientcenterid'); ?>
		<?php echo $form->textField($model,'patientcenterid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centeridA'); ?>
		<?php echo $form->textField($model,'centeridA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centeridB'); ?>
		<?php echo $form->textField($model,'centeridB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centeridC'); ?>
		<?php echo $form->textField($model,'centeridC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doctoridA'); ?>
		<?php echo $form->textField($model,'doctoridA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doctoridB'); ?>
		<?php echo $form->textField($model,'doctoridB',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doctoridC'); ?>
		<?php echo $form->textField($model,'doctoridC',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'systemid'); ?>
		<?php echo $form->textField($model,'systemid',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patientid'); ?>
		<?php echo $form->textField($model,'patientid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->