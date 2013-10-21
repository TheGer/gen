<?php
/* @var $this OpthfundusphotographytestController */
/* @var $model Opthfundusphotographytest */
/* @var $form CActiveForm */
$url = '/opthalmologicalfundusphotographytest/' . $action . '/'.$model->id;



?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthfundusphotographytest-form'.$model->eye,
    'action'=>Yii::app()->createUrl($url),
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); 
           echo $form->hiddenField($model,'examid'); 
        echo $form->hiddenField($model,'eye');
        
        ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CDratio'); ?>
		<?php echo $form->dropDownList($model, 'CDratio',$_SESSION['range4'] ); ?>
		<?php echo $form->error($model,'CDratio'); ?>
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
    foreach ($model->opthfundusphotographytestfiles as $pfile) {
        $this->renderPartial('/opthfundusphotographytestfile/_displayonefile', array('data' => $pfile));
    }
  
    ?>
    
    <?php
    $filemodel = new Opthfundusphotographytestfile;
    //link the file to the patient
    $filemodel->testid = $model->id;
    $this->renderPartial('/opthfundusphotographytestfile/_form', array('model' => $filemodel,'createnew'=>$model->isNewRecord,'eye'=>$model->eye,'examid'=>$model->examid));
    
    
    ?>
</div><!-- form -->