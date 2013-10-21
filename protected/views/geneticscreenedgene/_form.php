<?php
/* @var $this GeneticscreenedgeneController */
/* @var $model Geneticscreenedgene */
/* @var $form CActiveForm */
?>

<div class="form">

   <?php
        $url = '/geneticscreenedgene/'.$action.'/'.$model->id;
    ?>
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'geneticscreenedgene-form',
        'action'=>Yii::app()->createUrl($url),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        
        <?php echo $form->hiddenField($model,'patientgeneid'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'geneid'); ?>
		<?php echo $form->dropDownList($model,'geneid',CHtml::listData(Gene::model()->findAll(),'id','genename'),array('empty' => '(Select a gene)')); ?>
		<?php echo $form->error($model,'geneid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'testingmethodid'); ?>
		<?php echo $form->dropDownList($model,'testingmethodid',CHtml::listData(Method::model()->findAll(),'id','methodname'),array('empty' => '(Select a testing method)')); ?>
		<?php echo $form->error($model,'testingmethodid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excluded'); ?>
		<?php echo $form->dropDownList($model, 'excluded', GeneralUtils::enumItem($model,'excluded'), array('empty' => 'Not applicable')); ?>
		<?php echo $form->error($model,'excluded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->