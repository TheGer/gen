<?php
/* @var $this OpthalmologicalfundusautofluortestController */
/* @var $data Opthalmologicalfundusautofluortest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examid')); ?>:</b>
	<?php echo CHtml::encode($data->examid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye')); ?>:</b>
	<?php echo CHtml::encode($data->eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device')); ?>:</b>
	<?php echo CHtml::encode($data->device); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ring')); ?>:</b>
	<?php echo CHtml::encode($data->ring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ringhorizontallength')); ?>:</b>
	<?php echo CHtml::encode($data->ringhorizontallength); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('patch')); ?>:</b>
	<?php echo CHtml::encode($data->patch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalatropy')); ?>:</b>
	<?php echo CHtml::encode($data->totalatropy); ?>
	<br />

	*/ ?>

</div>