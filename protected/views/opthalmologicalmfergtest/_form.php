<?php
/* @var $this OpthalmologicalmfergtestController */
/* @var $model Opthalmologicalmfergtest */
/* @var $form CActiveForm */

$url = '/opthalmologicalmfergtest/' . $action . '/'.$model->id;




?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalmfergtest-form'.$model->eye,
        'action'=>Yii::app()->createUrl($url),
	'enableAjaxValidation'=>false,
)); ?>

        
	<?php echo $form->errorSummary($model); 
        echo $form->hiddenField($model,'examid'); 
        echo $form->hiddenField($model,'eye');
        ?>
        

	

	<div class="row">
		<?php echo $form->labelEx($model,'nonperformedcomments'); ?>
		<?php echo $form->textArea($model,'nonperformedcomments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nonperformedcomments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device'); ?>
		<?php echo $form->dropDownList($model, 'device', GeneralUtils::enumItem($model, 'device')); ?>
		<?php echo $form->error($model,'device'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pupilsizeendoftest'); ?>
		<?php echo $form->textField($model,'pupilsizeendoftest'); ?>
		<?php echo $form->error($model,'pupilsizeendoftest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Concentricring1'); ?>
		<?php echo $form->dropDownList($model, 'Concentricring1', $_SESSION['range0']); ?>
		<?php echo $form->error($model,'Concentricring1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Concentricring2'); ?>
		<?php echo $form->dropDownList($model, 'Concentricring2',$_SESSION['range0']); ?>
		<?php echo $form->error($model,'Concentricring2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Concentricring3'); ?>
		<?php echo $form->dropDownList($model, 'Concentricring3', $_SESSION['range0']); ?>
		<?php echo $form->error($model,'Concentricring3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<h2>Uploaded files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->opthalmologicalmfergtestfiles as $pfile) {
        $this->renderPartial('/opthalmologicalmfergtestfile/_displayonefile', array('data' => $pfile));
    }
  
    ?>

    <?php
    $filemodel = new Opthalmologicalmfergtestfile;
    //link the file to the patient
    $filemodel->testid = $model->id;
    $this->renderPartial('/opthalmologicalmfergtestfile/_form', array('model' => $filemodel,'createnew'=>$model->isNewRecord,'eye'=>$model->eye,'examid'=>$model->examid));
    
    
    ?>
</div><!-- form -->