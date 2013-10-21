<?php
/* @var $this SiteController */
/* @var $model ForgotPasswordForm */
/* @var $form CActiveForm  */


$this->breadcrumbs=array(
	'ForgotPassword'
);

?>

<h1>Forgot Password</h1>

<div class="form" >
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'forgotpassword-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
		
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Generate new password and send by email'); ?>
	</div>

<?php $this->endWidget(); ?>

