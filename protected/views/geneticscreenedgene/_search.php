<?php
/* @var $this GeneticscreenedgeneController */
/* @var $model Geneticscreenedgene */
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
		<?php echo $form->label($model,'patientegeneid'); ?>
		<?php echo $form->textField($model,'patientegeneid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'testingmethodid'); ?>
		<?php echo $form->textField($model,'testingmethodid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excluded'); ?>
		<?php echo $form->textField($model,'excluded',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
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