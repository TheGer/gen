<?php
/* @var $this OpthalmologicalmicroperimetrytestfileController */
/* @var $model Opthalmologicalmicroperimetrytestfile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalmicroperimetrytestfile-form',
    'action'=>Yii::app()->createUrl('/Opthalmologicalmicroperimetrytestfile/create'),
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

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Upload'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->