<?php
/* @var $this GeneticmutationController */
/* @var $model Geneticmutation */
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
		<?php echo $form->label($model,'patientgeneid'); ?>
		<?php echo $form->textField($model,'patientgeneid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patientlocusid'); ?>
		<?php echo $form->textField($model,'patientlocusid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstallel'); ?>
		<?php echo $form->textField($model,'firstallel',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstallelmutation'); ?>
		<?php echo $form->textField($model,'firstallelmutation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secondallel'); ?>
		<?php echo $form->textField($model,'secondallel',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secondallelmutation'); ?>
		<?php echo $form->textField($model,'secondallelmutation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thirdallel'); ?>
		<?php echo $form->textField($model,'thirdallel',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thirdallelmutation'); ?>
		<?php echo $form->textField($model,'thirdallelmutation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fourthallel'); ?>
		<?php echo $form->textField($model,'fourthallel',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fourthallelmutation'); ?>
		<?php echo $form->textField($model,'fourthallelmutation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mutationtype'); ?>
		<?php echo $form->textField($model,'mutationtype',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->