<?php
/* @var $this OpthalmologicaltonometrytestController */
/* @var $model Opthalmologicaltonometrytest */
/* @var $form CActiveForm */

$url = '/opthalmologicaltonometrytest/' . $action . '/'.$model->id;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicaltonometrytest-form',
    'action'=>Yii::app()->createUrl($url),
	'enableAjaxValidation'=>false,
)); ?>

	
       
	<?php echo $form->errorSummary($model); 
          echo $form->hiddenField($model,'testid'); 
        echo $form->hiddenField($model,'eye');
        ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'vocalaudiogram'); ?>
		<?php echo $form->dropDownList($model, 'vocalaudiogram', GeneralUtils::enumItem($model, 'vocalaudiogram')); ?>
		<?php echo $form->error($model,'vocalaudiogram'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'vocalvpp40'); ?>
		<?php echo $form->textField($model,'vocalvpp40'); ?>
		<?php echo $form->error($model,'vocalvpp40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vocalvmf40'); ?>
		<?php echo $form->textField($model,'vocalvmf40'); ?>
		<?php echo $form->error($model,'vocalvmf40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vocalvff40'); ?>
		<?php echo $form->textField($model,'vocalvff40'); ?>
		<?php echo $form->error($model,'vocalvff40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonalaudiogram'); ?>
		<?php echo $form->dropDownList($model, 'tonalaudiogram', GeneralUtils::enumItem($model, 'tonalaudiogram')); ?>
		<?php echo $form->error($model,'tonalaudiogram'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonal250'); ?>
		<?php echo $form->textField($model,'tonal250'); ?>
		<?php echo $form->error($model,'tonal250'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonal500'); ?>
		<?php echo $form->textField($model,'tonal500'); ?>
		<?php echo $form->error($model,'tonal500'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonal1000'); ?>
		<?php echo $form->textField($model,'tonal1000'); ?>
		<?php echo $form->error($model,'tonal1000'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonal2000'); ?>
		<?php echo $form->textField($model,'tonal2000'); ?>
		<?php echo $form->error($model,'tonal2000'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonal3000'); ?>
		<?php echo $form->textField($model,'tonal3000'); ?>
		<?php echo $form->error($model,'tonal3000'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonal4000'); ?>
		<?php echo $form->textField($model,'tonal4000'); ?>
		<?php echo $form->error($model,'tonal4000'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonal6000'); ?>
		<?php echo $form->textField($model,'tonal6000'); ?>
		<?php echo $form->error($model,'tonal6000'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonal8000'); ?>
		<?php echo $form->textField($model,'tonal8000'); ?>
		<?php echo $form->error($model,'tonal8000'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'otospontanic'); ?>
		<?php echo $form->dropDownList($model, 'otospontanic', GeneralUtils::enumItem($model, 'otospontanic')); ?>
		<?php echo $form->error($model,'otospontanic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otoprovoced'); ?>
		<?php echo $form->dropDownList($model, 'otoprovoced', GeneralUtils::enumItem($model, 'otoprovoced')); ?>
		<?php echo $form->error($model,'otoprovoced'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otodistortionproducts'); ?>
		<?php echo $form->dropDownList($model, 'otodistortionproducts', GeneralUtils::enumItem($model, 'otodistortionproducts')); ?>
		<?php echo $form->error($model,'otodistortionproducts'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->




	

	

