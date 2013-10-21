<?php
/* @var $this OpthalmologicalvisualfieldtestController */
/* @var $model Opthalmologicalvisualfieldtest */
/* @var $form CActiveForm */
$url = '/opthalmologicalvisualfieldtest/' . $action . '/'.$model->id;


?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'opthalmologicalvisualfieldtest-form'.$model->eye,
        'action'=>Yii::app()->createUrl($url),
        'enableAjaxValidation' => false,
    ));
    ?>

   
    <?php
    echo $form->errorSummary($model);
    echo $form->hiddenField($model, 'examid');
    echo $form->hiddenField($model, 'eye');
    ?>



	<div class="row">
		<?php echo $form->labelEx($model,'performed'); ?>
		<?php echo $form->dropDownList($model, 'performed', GeneralUtils::enumItem($model, 'performed')); ?>
		<?php echo $form->error($model,'performed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device'); ?>
		<?php echo $form->dropDownList($model, 'device', GeneralUtils::enumItem($model, 'device')); ?>
		<?php echo $form->error($model,'device'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textArea($model,'other',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notperformedcomment'); ?>
		<?php echo $form->textArea($model,'notperformedcomment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notperformedcomment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centralsensitivity'); ?>
			<?php echo $form->textField($model, 'centralsensitivity'); ?>
		<?php echo $form->error($model,'centralsensitivity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preservedcentralzone'); ?>
		<?php echo $form->textField($model, 'preservedcentralzone'); ?>
		<?php echo $form->error($model,'preservedcentralzone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preservedislandinperiphery'); ?>
		<?php echo $form->textField($model, 'preservedislandinperiphery'); ?>
		<?php echo $form->error($model,'preservedislandinperiphery'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blindspot'); ?>
		<?php echo $form->textField($model, 'blindspot'); ?>
		<?php echo $form->error($model,'blindspot'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton( 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<h2>Uploaded files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->opthalmologicalvisualfieldtestfiles as $pfile) {
        $this->renderPartial('/opthalmologicalvisualfieldtestfile/_displayonefile', array('data' => $pfile));
    }
  
    ?>

    <?php
    $filemodel = new Opthalmologicalvisualfieldtestfile;
    //link the file to the patient
    $filemodel->testid = $model->id;
    $this->renderPartial('/opthalmologicalvisualfieldtestfile/_form', array('model' => $filemodel,'createnew'=>$model->isNewRecord,'eye'=>$model->eye,'examid'=>$model->examid));
    
    
    ?>
</div><!-- form -->