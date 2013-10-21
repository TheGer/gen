<?php
/* @var $this PatientgeneticsController */
/* @var $model Patientgenetics */
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
		<?php echo $form->label($model,'modeofinheritance'); ?>
		<?php echo $form->textField($model,'modeofinheritance',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'levelofcertainty'); ?>
		<?php echo $form->textField($model,'levelofcertainty',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allellestatus'); ?>
		<?php echo $form->textField($model,'allellestatus',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dnasample'); ?>
		<?php echo $form->textField($model,'dnasample',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'screenedformutations'); ?>
		<?php echo $form->textField($model,'screenedformutations',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateofscreening'); ?>
		<?php echo $form->textField($model,'dateofscreening'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsiblemutation'); ?>
		<?php echo $form->textField($model,'responsiblemutation',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->