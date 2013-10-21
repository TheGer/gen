<?php
/* @var $this OpthalmologicalmfergtestController */
/* @var $model Opthalmologicalmfergtest */
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
		<?php echo $form->label($model,'examid'); ?>
		<?php echo $form->textField($model,'examid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eye'); ?>
		<?php echo $form->textField($model,'eye',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nonperformedcomments'); ?>
		<?php echo $form->textArea($model,'nonperformedcomments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device'); ?>
		<?php echo $form->textField($model,'device',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pupilsizeendoftest'); ?>
		<?php echo $form->textField($model,'pupilsizeendoftest'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Concentricring1'); ?>
		<?php echo $form->textField($model,'Concentricring1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Concentricring2'); ?>
		<?php echo $form->textField($model,'Concentricring2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Concentricring3'); ?>
		<?php echo $form->textField($model,'Concentricring3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->