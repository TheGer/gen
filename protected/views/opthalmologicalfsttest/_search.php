<?php
/* @var $this OpthalmologicalfsttestController */
/* @var $model Opthalmologicalfsttest */
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
		<?php echo $form->label($model,'whitestimulusthreshold'); ?>
		<?php echo $form->textField($model,'whitestimulusthreshold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'whitestimuluserrorblanks'); ?>
		<?php echo $form->textField($model,'whitestimuluserrorblanks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'whitestimuluserrormax'); ?>
		<?php echo $form->textField($model,'whitestimuluserrormax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bluestimulusthreshold'); ?>
		<?php echo $form->textField($model,'bluestimulusthreshold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bluestimuluserrorblanks'); ?>
		<?php echo $form->textField($model,'bluestimuluserrorblanks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bluestimuluserrormax'); ?>
		<?php echo $form->textField($model,'bluestimuluserrormax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'redstimulusthreshold'); ?>
		<?php echo $form->textField($model,'redstimulusthreshold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'redstiumuluserrorblanks'); ?>
		<?php echo $form->textField($model,'redstiumuluserrorblanks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'redstimuluserrormax'); ?>
		<?php echo $form->textField($model,'redstimuluserrormax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eye'); ?>
		<?php echo $form->textField($model,'eye',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->