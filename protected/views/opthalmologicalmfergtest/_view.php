<?php
/* @var $this OpthalmologicalmfergtestController */
/* @var $data Opthalmologicalmfergtest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examid')); ?>:</b>
	<?php echo CHtml::encode($data->examid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye')); ?>:</b>
	<?php echo CHtml::encode($data->eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nonperformedcomments')); ?>:</b>
	<?php echo CHtml::encode($data->nonperformedcomments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device')); ?>:</b>
	<?php echo CHtml::encode($data->device); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pupilsizeendoftest')); ?>:</b>
	<?php echo CHtml::encode($data->pupilsizeendoftest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Concentricring1')); ?>:</b>
	<?php echo CHtml::encode($data->Concentricring1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Concentricring2')); ?>:</b>
	<?php echo CHtml::encode($data->Concentricring2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Concentricring3')); ?>:</b>
	<?php echo CHtml::encode($data->Concentricring3); ?>
	<br />

	*/ ?>

</div>