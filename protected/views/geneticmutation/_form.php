<?php
/* @var $this GeneticmutationController */
/* @var $model Geneticmutation */
/* @var $form CActiveForm */

$url = '/geneticmutation/' . $action . '/'.$model->id;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'geneticmutation-form',
        'action' => Yii::app()->createUrl($url),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->hiddenField($model,'patientgeneid'); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'patientlocusid'); ?>
		<?php echo $form->dropDownList($model,'patientlocusid',CHtml::listData(Locus::model()->findAll(),'id','locusname'),array('empty' => '(Select a locus)')); ?>
		<?php echo $form->error($model,'patientlocusid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstallel'); ?>
		<?php echo $form->dropDownList($model, 'firstallel', GeneralUtils::enumItem($model,'firstallel'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'firstallel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstallelmutation'); ?>
		<?php echo $form->textField($model,'firstallelmutation',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstallelmutation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'secondallel'); ?>
		<?php echo $form->dropDownList($model, 'secondallel', GeneralUtils::enumItem($model,'secondallel'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'secondallel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'secondallelmutation'); ?>
		<?php echo $form->textField($model,'secondallelmutation',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'secondallelmutation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thirdallel'); ?>
		<?php echo $form->dropDownList($model, 'thirdallel', GeneralUtils::enumItem($model,'thirdallel'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'thirdallel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thirdallelmutation'); ?>
		<?php echo $form->textField($model,'thirdallelmutation',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'thirdallelmutation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fourthallel'); ?>
		<?php echo $form->dropDownList($model, 'fourthallel', GeneralUtils::enumItem($model,'fourthallel'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'fourthallel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fourthallelmutation'); ?>
		<?php echo $form->textField($model,'fourthallelmutation',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fourthallelmutation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mutationtype'); ?>
		<?php echo $form->dropDownList($model, 'mutationtype', GeneralUtils::enumItem($model,'mutationtype'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'mutationtype'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->