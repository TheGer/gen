<?php
/* @var $this OpthalmologicalocttestController */
/* @var $model Opthalmologicalocttest */
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
		<?php echo $form->label($model,'notperformedcomments'); ?>
		<?php echo $form->textArea($model,'notperformedcomments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device'); ?>
		<?php echo $form->textField($model,'device',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fovealthickness'); ?>
		<?php echo $form->textField($model,'fovealthickness'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'othercomments'); ?>
		<?php echo $form->textArea($model,'othercomments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centralmaculathickness'); ?>
		<?php echo $form->textField($model,'centralmaculathickness'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glosis'); ?>
		<?php echo $form->textField($model,'glosis',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'epiretinalmembrane'); ?>
		<?php echo $form->textField($model,'epiretinalmembrane',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maculahole'); ?>
		<?php echo $form->textField($model,'maculahole',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maculaedema'); ?>
		<?php echo $form->textField($model,'maculaedema',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cysticchanges'); ?>
		<?php echo $form->textField($model,'cysticchanges',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preservedisos'); ?>
		<?php echo $form->textField($model,'preservedisos',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isoshorizontallength'); ?>
		<?php echo $form->textField($model,'isoshorizontallength'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->