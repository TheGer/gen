<?php
/* @var $this PatientopthalmologicaldataController */
/* @var $model Patientopthalmologicaldata */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patientopthalmologicaldata-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php echo $form->hiddenField($model,'patientid'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'examinationdate'); ?>
		 <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model, // Model object
            'attribute' => 'examinationdate', // Attribute name
            'options' => array(
                'showAnim' => 'fold',
            ), // jquery plugin options
            'htmlOptions' => array('style' => 'height:20px;') // HTML options
        ));
        ?> 
		<?php echo $form->error($model,'examinationdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->