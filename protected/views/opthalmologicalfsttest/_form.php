<?php
/* @var $this OpthalmologicalfsttestController */
/* @var $model Opthalmologicalfsttest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalfsttest-form',
    'action'=>Yii::app()->createUrl('/Opthalmologicalfsttest/create'),
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model);
         echo $form->hiddenField($model,'examid'); 
        echo $form->hiddenField($model,'eye');
        
        ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'performed'); ?>
		<?php echo $form->dropDownList($model, 'performed', GeneralUtils::enumItem($model, 'performed')); ?>
		<?php echo $form->error($model,'performed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'whitestimulusthreshold'); ?>
		<?php echo $form->textField($model,'whitestimulusthreshold'); ?>
		<?php echo $form->error($model,'whitestimulusthreshold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'whitestimuluserrorblanks'); ?>
		<?php echo $form->textField($model,'whitestimuluserrorblanks'); ?>
		<?php echo $form->error($model,'whitestimuluserrorblanks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'whitestimuluserrormax'); ?>
		<?php echo $form->textField($model,'whitestimuluserrormax'); ?>
		<?php echo $form->error($model,'whitestimuluserrormax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bluestimulusthreshold'); ?>
		<?php echo $form->textField($model,'bluestimulusthreshold'); ?>
		<?php echo $form->error($model,'bluestimulusthreshold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bluestimuluserrorblanks'); ?>
		<?php echo $form->textField($model,'bluestimuluserrorblanks'); ?>
		<?php echo $form->error($model,'bluestimuluserrorblanks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bluestimuluserrormax'); ?>
		<?php echo $form->textField($model,'bluestimuluserrormax'); ?>
		<?php echo $form->error($model,'bluestimuluserrormax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'redstimulusthreshold'); ?>
		<?php echo $form->textField($model,'redstimulusthreshold'); ?>
		<?php echo $form->error($model,'redstimulusthreshold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'redstiumuluserrorblanks'); ?>
		<?php echo $form->textField($model,'redstiumuluserrorblanks'); ?>
		<?php echo $form->error($model,'redstiumuluserrorblanks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'redstimuluserrormax'); ?>
		<?php echo $form->textField($model,'redstimuluserrormax'); ?>
		<?php echo $form->error($model,'redstimuluserrormax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eye'); ?>
		<?php echo $form->textField($model,'eye',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'eye'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->