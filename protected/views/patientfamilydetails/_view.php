<?php
/* @var $this PatientfamilydetailsController */
/* @var $data Patientfamilydetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientid')); ?>:</b>
	<?php echo CHtml::encode($data->patientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentsorigin')); ?>:</b>
	<?php echo CHtml::encode($data->parentsorigin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sporadicorfamily')); ?>:</b>
	<?php echo CHtml::encode($data->sporadicorfamily); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consanguinity')); ?>:</b>
	<?php echo CHtml::encode($data->consanguinity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofaffectedfamily')); ?>:</b>
	<?php echo CHtml::encode($data->numberofaffectedfamily); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('children')); ?>:</b>
	<?php echo CHtml::encode($data->children); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofchildrenaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberofchildrenaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofchildrennonaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberofchildrennonaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofchildrenunknownstatus')); ?>:</b>
	<?php echo CHtml::encode($data->numberofchildrenunknownstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('siblings')); ?>:</b>
	<?php echo CHtml::encode($data->siblings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofsiblingsaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberofsiblingsaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofsiblingsnonaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberofsiblingsnonaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofsiblingsunknownstatus')); ?>:</b>
	<?php echo CHtml::encode($data->numberofsiblingsunknownstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('twins')); ?>:</b>
	<?php echo CHtml::encode($data->twins); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberoftwinsaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberoftwinsaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberoftwinsnotaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberoftwinsnotaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberoftwinsunknownstatus')); ?>:</b>
	<?php echo CHtml::encode($data->numberoftwinsunknownstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedigreeavailable')); ?>:</b>
	<?php echo CHtml::encode($data->pedigreeavailable); ?>
	<br />

	*/ ?>

</div>