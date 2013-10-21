<?php
/* @var $this OpthalmologicalocttestController */
/* @var $model Opthalmologicalocttest */
/* @var $form CActiveForm */
$url = '/opthalmologicalocttest/' . $action . '/'.$model->id;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opthalmologicalocttest-form',
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
		<?php echo $form->labelEx($model,'notperformedcomments'); ?>
		<?php echo $form->textArea($model,'notperformedcomments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notperformedcomments'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'fovealthickness'); ?>
		<?php echo $form->textField($model,'fovealthickness'); ?>
		<?php echo $form->error($model,'fovealthickness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'othercomments'); ?>
		<?php echo $form->textArea($model,'othercomments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'othercomments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centralmaculathickness'); ?>
		<?php echo $form->dropDownList($model, 'centralmaculathickness',$_SESSION['centralmaculathickness'] ); ?>
		<?php echo $form->error($model,'centralmaculathickness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'glosis'); ?>
		<?php echo $form->dropDownList($model, 'glosis', GeneralUtils::enumItem($model, 'glosis')); ?>
		<?php echo $form->error($model,'glosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'epiretinalmembrane'); ?>
		<?php echo $form->dropDownList($model, 'epiretinalmembrane', GeneralUtils::enumItem($model, 'epiretinalmembrane')); ?>
		<?php echo $form->error($model,'epiretinalmembrane'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maculahole'); ?>
		<?php echo $form->dropDownList($model, 'maculahole', GeneralUtils::enumItem($model, 'maculahole')); ?>
		<?php echo $form->error($model,'maculahole'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maculaedema'); ?>
		<?php echo $form->dropDownList($model, 'maculaedema', GeneralUtils::enumItem($model, 'maculaedema')); ?>
		<?php echo $form->error($model,'maculaedema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cysticchanges'); ?>
		<?php echo $form->dropDownList($model, 'cysticchanges', GeneralUtils::enumItem($model, 'cysticchanges')); ?>
		<?php echo $form->error($model,'cysticchanges'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preservedisos'); ?>
		<?php echo $form->dropDownList($model, 'preservedisos', GeneralUtils::enumItem($model, 'preservedisos')); ?>
		<?php echo $form->error($model,'preservedisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isoshorizontallength'); ?>
		<?php echo $form->textField($model,'isoshorizontallength'); ?>
		<?php echo $form->error($model,'isoshorizontallength'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>
 
<h2>Uploaded OCT test files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->opthalmologicalocttestfiles as $pfile) {
        $this->renderPartial('/opthalmologicalocttestfile/_displayonefile', array('data' => $pfile));
    }
  
    ?>
    <h2>Add a new file</h2>
    <?php
    $filemodel = new Opthalmologicalocttestfile;
    //link the file to the patient
    $filemodel->testid = $model->id;
    $this->renderPartial('/opthalmologicalocttestfile/_form', array('model' => $filemodel,'createnew'=>$model->isNewRecord,'eye'=>$model->eye,'examid'=>$model->examid));
    
    
    ?>

</div><!-- form -->