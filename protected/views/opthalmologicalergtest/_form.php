<?php
/* @var $this OpthalmologicalergtestController */
/* @var $model Opthalmologicalergtest */
/* @var $form CActiveForm */

$url = '/opthalmologicalergtest/' . $action . '/'.$model->id;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalergtest-form'.$model->eye,
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
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notperformedcomment'); ?>
		<?php echo $form->textArea($model,'notperformedcomment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notperformedcomment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Skotopicamplitudeawave'); ?>
		<?php echo $form->dropDownList($model, 'Skotopicamplitudeawave', GeneralUtils::getRange(10, -100, -1)); ?>
		<?php echo $form->error($model,'Skotopicamplitudeawave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Skotopicamplitudebwave'); ?>
		<?php echo $form->dropDownList($model, 'Skotopicamplitudeawave', GeneralUtils::getRange(10, 500, 1)); ?>
		<?php echo $form->error($model,'Skotopicamplitudebwave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Photopicamplitudeawave'); ?>
		<?php echo $form->dropDownList($model, 'Photopicamplitudeawave', GeneralUtils::getRange(10, -100, -1)); ?>
		<?php echo $form->error($model,'Photopicamplitudeawave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Photopicamplitudebwave'); ?>
		<?php echo $form->dropDownList($model, 'Photopicamplitudebwave', GeneralUtils::getRange(10, 500, 1)); ?>
		<?php echo $form->error($model,'Photopicamplitudebwave'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton( 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<h2>Uploaded files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->opthalmologicalergtestfiles as $pfile) {
        $this->renderPartial('/opthalmologicalergtestfile/_displayonefile', array('data' => $pfile));
    }
  
    ?>
  
    <?php
    $filemodel = new Opthalmologicalergtestfile;
    //link the file to the patient
    $filemodel->testid = $model->id;
    $this->renderPartial('/opthalmologicalergtestfile/_form', array('model' => $filemodel,'createnew'=>$model->isNewRecord,'eye'=>$model->eye,'examid'=>$model->examid));
    
    
    ?>
</div><!-- form -->