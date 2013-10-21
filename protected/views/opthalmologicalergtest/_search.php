<?php
/* @var $this OpthalmologicalergtestController */
/* @var $model Opthalmologicalergtest */
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
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device'); ?>
		<?php echo $form->textField($model,'device',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments2'); ?>
		<?php echo $form->textArea($model,'comments2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eye'); ?>
		<?php echo $form->textField($model,'eye',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notperformedcomment'); ?>
		<?php echo $form->textArea($model,'notperformedcomment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Skotopicamplitudeawave'); ?>
		<?php echo $form->textField($model,'Skotopicamplitudeawave'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Skotopicamplitudebwave'); ?>
		<?php echo $form->textField($model,'Skotopicamplitudebwave'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Photopicamplitudeawave'); ?>
		<?php echo $form->textField($model,'Photopicamplitudeawave'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Photopicamplitudebwave'); ?>
		<?php echo $form->textField($model,'Photopicamplitudebwave'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->