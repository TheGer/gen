<?php
/* @var $this PatientgeneticsController */
/* @var $data Patientgenetics */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientid')); ?>:</b>
	<?php echo CHtml::encode($data->patientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modeofinheritance')); ?>:</b>
	<?php echo CHtml::encode($data->modeofinheritance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('levelofcertainty')); ?>:</b>
	<?php echo CHtml::encode($data->levelofcertainty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allellestatus')); ?>:</b>
	<?php echo CHtml::encode($data->allellestatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dnasample')); ?>:</b>
	<?php echo CHtml::encode($data->dnasample); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('screenedformutations')); ?>:</b>
	<?php echo CHtml::encode($data->screenedformutations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateofscreening')); ?>:</b>
	<?php echo CHtml::encode($data->dateofscreening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsiblemutation')); ?>:</b>
	<?php echo CHtml::encode($data->responsiblemutation); ?>
	<br />

	

	 ?>

</div>