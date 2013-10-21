<?php
/* @var $this OpthalmologicalvisualfieldtestController */
/* @var $model Opthalmologicalvisualfieldtest */
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
		<?php echo $form->label($model,'performed'); ?>
		<?php echo $form->textField($model,'performed',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device'); ?>
		<?php echo $form->textField($model,'device',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eye'); ?>
		<?php echo $form->textField($model,'eye',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other'); ?>
		<?php echo $form->textArea($model,'other',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notperformedcomment'); ?>
		<?php echo $form->textArea($model,'notperformedcomment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centralsensitivity'); ?>
		<?php echo $form->textField($model,'centralsensitivity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preservedcentralzone'); ?>
		<?php echo $form->textField($model,'preservedcentralzone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preservedislandinperiphery'); ?>
		<?php echo $form->textField($model,'preservedislandinperiphery'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blindspot'); ?>
		<?php echo $form->textField($model,'blindspot'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->