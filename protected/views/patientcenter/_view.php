<?php
/* @var $this PatientcenterController */
/* @var $data Patientcenter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->patientid), array('view', 'id'=>$data->patientid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientcenterid')); ?>:</b>
	<?php echo CHtml::encode($data->patientcenterid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centeridA')); ?>:</b>
	<?php echo CHtml::encode($data->centeridA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centeridB')); ?>:</b>
	<?php echo CHtml::encode($data->centeridB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centeridC')); ?>:</b>
	<?php echo CHtml::encode($data->centeridC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctoridA')); ?>:</b>
	<?php echo CHtml::encode($data->doctoridA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctoridB')); ?>:</b>
	<?php echo CHtml::encode($data->doctoridB); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('doctoridC')); ?>:</b>
	<?php echo CHtml::encode($data->doctoridC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('systemid')); ?>:</b>
	<?php echo CHtml::encode($data->systemid); ?>
	<br />

	*/ ?>

</div>