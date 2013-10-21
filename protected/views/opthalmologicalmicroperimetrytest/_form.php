<?php
/* @var $this OpthalmologicalmicroperimetrytestController */
/* @var $model Opthalmologicalmicroperimetrytest */
/* @var $form CActiveForm */
$url = '/opthalmologicalmicroperimetrytest/' . $action . '/'.$model->id;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalmicroperimetrytest-form',
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

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

 
<h2>Uploaded Microperimetry test files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->opthalmologicalmicroperimetrytestfiles as $pfile) {
        $this->renderPartial('/opthalmologicalmicroperimetrytestfile/_displayonefile', array('data' => $pfile));
    }
  
    ?>

    <?php
    $filemodel = new Opthalmologicalmicroperimetrytestfile;
    //link the file to the patient
    $filemodel->testid = $model->id;
    $this->renderPartial('/opthalmologicalmicroperimetrytestfile/_form', array('model' => $filemodel,'createnew'=>$model->isNewRecord,'eye'=>$model->eye,'examid'=>$model->examid));
    
    
    ?>
        
</div><!-- form -->