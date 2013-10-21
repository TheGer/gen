<?php
/* @var $this SiteController */
/* @var $model AddPatientForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Add Patient Step 1';
$this->breadcrumbs=array(
	'Add Patient Step 1',
);
?>

<h1>Add New Patient</h1>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'add-patient-step1-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

       
        
	<div class="row">
		<?php echo $form->labelEx($model,'centeridA'); ?>
		<?php echo $form->dropDownList($model,'centeridA',CHtml::listData(Center::model()->findAll(),'id','centername'),array('empty' => '(Select a center)')); ?>
		<?php echo $form->error($model,'centeridA'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'centeridB'); ?>
		<?php echo $form->dropDownList($model,'centeridB',CHtml::listData(Center::model()->findAll(),'id','centername'),array('empty' => '(Select a center)')); ?>
		<?php echo $form->error($model,'centeridA'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'centeridC'); ?>
		<?php echo $form->dropDownList($model,'centeridC',CHtml::listData(Center::model()->findAll(),'id','centername'),array('empty' => '(Select a center)')); ?>
		<?php echo $form->error($model,'centeridC'); ?>
	</div>
	

 <div class="column"/>
        <div class="row">
		<?php echo $form->labelEx($model,'internalcenteridA'); ?>
		<?php echo $form->textField($model,'internalcenteridA'); ?>
		<?php echo $form->error($model,'internalcenteridA'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'internalcenteridB'); ?>
		<?php echo $form->textField($model,'internalcenteridB'); ?>
		<?php echo $form->error($model,'internalcenteridB'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'internalcenteridC'); ?>
		<?php echo $form->textField($model,'internalcenteridC'); ?>
		<?php echo $form->error($model,'internalcenteridC'); ?>
	</div>
 <div class="column"/>
  <div class="row">
		<?php echo $form->labelEx($model,'drA'); ?>
		<?php echo $form->textField($model,'drA'); ?>
		<?php echo $form->error($model,'drA'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'drB'); ?>
		<?php echo $form->textField($model,'drB'); ?>
		<?php echo $form->error($model,'drB'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'drC'); ?>
		<?php echo $form->textField($model,'drC'); ?>
		<?php echo $form->error($model,'drC'); ?>
	</div>
 
	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

