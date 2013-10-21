<?php
/* @var $this SiteController */
/* @var $model AddPatientForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Update General Patient Data';
$this->breadcrumbs=array(
	'Patients'=>array('index'),
        $patientid=>array('/patient/view','id'=>$patientid),
	$patientid,
);


$this->menu=array(
        array('label'=>'List All Patients', 'url'=>array('/patient/index')),
        array('label'=>'Search Patients', 'url'=>array('/patient/search')),
	array('label'=>'Delete Patient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('/patient/delete','id'=>$patientid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Update Center Specific Data', 'url'=>array('/site/patientStep1Update', 'id'=>$patientid)),
        array('label'=>'Update General Patient Data', 'url'=>array('/patient/update', 'id'=>$patientid)),
        array('label'=>'Update Genetics', 'url'=>array('/patient/genetics', 'id'=>$patientid)),
        array('label'=>'Update Patient Phenotype', 'url'=>array('/patientopthalmologicaldata/indexOfPatient', 'id'=>$patientid)),
);

?>

<h1>Update Centre Specific Data</h1>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'update-patient-data-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

       
        <table>
            <tr>
                <td>
                  <div class="row">
		<?php echo $form->labelEx($model,'centeridA'); ?>
		<?php echo $form->dropDownList($model,'centeridA',CHtml::listData(Center::model()->findAll(),'id','centername'),array('empty' => '(Select a center)')); ?>
		<?php echo $form->error($model,'centeridA'); ?>
                </div>
<div class="row">
		<?php echo $form->labelEx($model,'centeridB'); ?>
		<?php echo $form->dropDownList($model,'centeridB',CHtml::listData(Center::model()->findAll(),'id','centername'),array('empty' => '(Select a center)')); ?>
		<?php echo $form->error($model,'centeridA'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'centeridC'); ?>
		<?php echo $form->dropDownList($model,'centeridC',CHtml::listData(Center::model()->findAll(),'id','centername'),array('empty' => '(Select a center)')); ?>
		<?php echo $form->error($model,'centeridC'); ?>
	</div>  
                </td>
                <td>
                    <div class="row">
		<?php echo $form->labelEx($model,'internalcenteridA'); ?>
		<?php echo $form->textField($model,'internalcenteridA'); ?>
		<?php echo $form->error($model,'internalcenteridA'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'internalcenteridB'); ?>
		<?php echo $form->textField($model,'internalcenteridB'); ?>
		<?php echo $form->error($model,'internalcenteridB'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'internalcenteridC'); ?>
		<?php echo $form->textField($model,'internalcenteridC'); ?>
		<?php echo $form->error($model,'internalcenteridC'); ?>
	</div> 
                    
                    
                    
                    
                </td>
                
                
              
            </tr>
            <tr>
            <td colspan="2">
                <div class="row">
		<?php echo $form->labelEx($model,'drA'); ?>
		<?php echo $form->textField($model,'drA'); ?>
		<?php echo $form->error($model,'drA'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'drB'); ?>
		<?php echo $form->textField($model,'drB'); ?>
		<?php echo $form->error($model,'drB'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'drC'); ?>
		<?php echo $form->textField($model,'drC'); ?>
		<?php echo $form->error($model,'drC'); ?>
	</div>
 
	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
                
            </td>
            </tr>
	
	
        </table>
 
  

<?php $this->endWidget(); ?>

</div><!-- form -->

