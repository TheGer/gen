<?php
/* @var $this OpthalmologicalcolorvisiontestController2 */
/* @var $model Opthalmologicalcolorvisiontest2 */
/* @var $form CActiveForm */


$url = '/opthalmologicalcolorvisiontest2/' . $action . '/'.$model->id;

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalcolorvisiontest2-form' . $model->eye,
        'htmlOptions'=>array('style'=>'display:none'),
        'action' => Yii::app()->createUrl($url),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	 <?php echo $form->hiddenField($model,'testid'); ?>
 <?php echo $form->hiddenField($model,'eye'); ?>
	

	<div class="row">
		<?php echo $form->labelEx($model,'performed'); ?>
		<?php echo $form->dropDownList($model, 'performed', GeneralUtils::enumItem($model, 'performed')); ?>
		<?php echo $form->error($model,'performed'); ?>
	</div>
        
        <div class="row">
        <?php echo $form->labelEx($model, 'notperformedcomment'); ?>
<?php echo $form->textArea($model, 'notperformedcomment', array('rows' => 6, 'cols' => 50)); ?>
<?php echo $form->error($model, 'notperformedcomment'); ?>
    </div>
        
        <div class="row">
        <?php echo $form->labelEx($model, 'other'); ?>
<?php echo $form->textField($model, 'other'); ?>
<?php echo $form->error($model, 'other'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model, 'type', GeneralUtils::enumItem($model, 'type')); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

   
        
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'confusionindex'); ?>
		<?php echo $form->textField($model,'confusionindex'); ?>
		<?php echo $form->error($model,'confusionindex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'angle'); ?>
		<?php echo $form->textField($model,'angle'); ?>
		<?php echo $form->error($model,'angle'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>
        

</div><!-- form -->