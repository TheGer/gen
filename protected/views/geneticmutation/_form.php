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
		<?php echo $form->labelEx($model,'responsiblegene'); ?>
		<?php echo $form->dropDownList($model, 'responsiblegene', GeneralUtils::enumItem($model,'responsiblegene'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'responsiblegene'); ?>
	</div>

  <div class="row">    
        
        <?php echo $form->labelEx($model, 'nomenclaturedna'); ?>
        <?php echo $form->textArea($model, 'nomenclaturedna', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'nomenclaturedna'); ?>
    </div>
        
          <div class="row">    
        
        <?php echo $form->labelEx($model, 'nomenclatureprotein'); ?>
        <?php echo $form->textArea($model, 'nomenclatureprotein', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'nomenclatureprotein'); ?>
    </div>
        <div class="row">
		<?php echo $form->labelEx($model,'classificationlist'); ?>
		<?php echo $form->dropDownList($model, 'classificationlist', GeneralUtils::enumItem($model,'classificationlist'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'classificationlist'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'typeofmutation'); ?>
		<?php echo $form->dropDownList($model, 'typeofmutation', GeneralUtils::enumItem($model,'typeofmutation'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'typeofmutation'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'allele'); ?>
		<?php echo $form->dropDownList($model, 'allele', GeneralUtils::enumItem($model,'allele'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'allele'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->