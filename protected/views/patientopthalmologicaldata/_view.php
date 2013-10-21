<?php
/* @var $this PatientopthalmologicaldataController */
/* @var $data Patientopthalmologicaldata */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientid')); ?>:</b>
	<?php echo CHtml::encode($data->patientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examinationdate')); ?>:</b>
	<?php echo CHtml::encode($data->examinationdate); ?>
	<br />


</div>