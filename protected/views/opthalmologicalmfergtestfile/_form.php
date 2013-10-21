<?php
/* @var $this OpthalmologicalmfergtestfileController */
/* @var $model Opthalmologicalmfergtestfile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalmfergtestfile-form',
    'action'=>Yii::app()->createUrl('/Opthalmologicalmfergtestfile/create'),
	'enableAjaxValidation'=>false,
        'htmlOptions' =>
array('enctype' => 'multipart/form-data'),
)); ?>

	

	<?php echo $form->errorSummary($model); 
        echo $form->hiddenField($model,'testid');
         echo CHtml::hiddenField('eye',$eye);
        echo CHtml::hiddenField('createnew',$createnew);
         echo CHtml::hiddenField('examid',$examid);
        ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'filepath'); ?>
		<?php echo $form->fileField($model,'filepath'); ?>
		<?php echo $form->error($model,'filepath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Upload'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->