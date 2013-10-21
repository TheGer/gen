<?php
/* @var $this OpthalmologicalfundusautofluortestController */
/* @var $model Opthalmologicalfundusautofluortest */
/* @var $form CActiveForm */

$url = '/opthalmologicalfundusautofluortest/' . $action . '/'.$model->id;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalfundusautofluortest-form'.$model->eye,
    'action'=>Yii::app()->createUrl($url),
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model);
           echo $form->hiddenField($model,'examid'); 
        echo $form->hiddenField($model,'eye');
        
        ?>

	
	

	<div class="row">
		<?php echo $form->labelEx($model,'device'); ?>
		<?php echo $form->dropDownList($model, 'device', GeneralUtils::enumItem($model, 'device')); ?>
		<?php echo $form->error($model,'device'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ring'); ?>
		<?php echo $form->dropDownList($model, 'ring', array("Yes","No")); ?>
		<?php echo $form->error($model,'ring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ringhorizontallength'); ?>
		<?php echo $form->textField($model,'ringhorizontallength'); ?>
		<?php echo $form->error($model,'ringhorizontallength'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patch'); ?>
		<?php echo $form->dropDownList($model, 'patch', array("Yes","No")); ?>
		<?php echo $form->error($model,'patch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalatropy'); ?>
		<?php echo $form->dropDownList($model, 'totalatropy', array("Yes","No")); ?>
		<?php echo $form->error($model,'totalatropy'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<h2>Uploaded files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->opthfundusautofluortestfiles as $pfile) {
        $this->renderPartial('/opthfundusautofluortestfile/_displayonefile', array('data' => $pfile));
    }
  
    ?>

    <?php
    $filemodel = new Opthfundusautofluortestfile;
    //link the file to the patient
    $filemodel->testid = $model->id;
    $this->renderPartial('/opthfundusautofluortestfile/_form', array('model' => $filemodel,'createnew'=>$model->isNewRecord,'eye'=>$model->eye,'examid'=>$model->examid));
    
    
    ?>
</div><!-- form -->