<?php
/* @var $this PatientfamilyController */
/* @var $data Patientfamily */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_familyid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->patient_familyid), array('view', 'id'=>$data->patient_familyid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientid')); ?>:</b>
	<?php echo CHtml::encode($data->patientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familyid')); ?>:</b>
	<?php echo CHtml::encode($data->familyid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />


</div>