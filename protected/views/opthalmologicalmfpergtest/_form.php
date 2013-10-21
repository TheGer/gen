<?php
/* @var $this OpthalmologicalmfpergtestController */
/* @var $model Opthalmologicalmfpergtest */
/* @var $form CActiveForm */
$url = '/opthalmologicalmfpergtest/' . $action . '/'.$model->id;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalmfpergtest-form',
    'action'=>Yii::app()->createUrl($url),
	'enableAjaxValidation'=>false,
)); ?>

	
        
	<?php echo $form->errorSummary($model);
        
            echo $form->hiddenField($model,'examid'); 
        echo $form->hiddenField($model,'eye');
        ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'performed'); ?>
		<?php echo $form->dropDownList($model, 'performed', GeneralUtils::enumItem($model, 'performed')); ?>
		<?php echo $form->error($model,'performed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device'); ?>
		<?php echo $form->dropDownList($model, 'device', GeneralUtils::enumItem($model, 'device')); ?>
		<?php echo $form->error($model,'device'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>
 
<h2>Uploaded MF PERG files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->opthalmologicalmfpergtestfiles as $pfile) {
        $this->renderPartial('/opthalmologicalmfpergtestfile/_displayonefile', array('data' => $pfile));
    }
  
    ?>

    <?php
    $filemodel = new Opthalmologicalmfpergtestfile;
    //link the file to the patient
    $filemodel->testid = $model->id;
    $this->renderPartial('/opthalmologicalmfpergtestfile/_form', array('model' => $filemodel,'createnew'=>$model->isNewRecord,'eye'=>$model->eye,'examid'=>$model->examid));
    
    
    ?>
        

</div><!-- form -->