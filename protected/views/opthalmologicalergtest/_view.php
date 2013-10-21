<?php
/* @var $this OpthalmologicalergtestController */
/* @var $data Opthalmologicalergtest */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('device')); ?>:</b>
	<?php echo CHtml::encode($data->device); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments2')); ?>:</b>
	<?php echo CHtml::encode($data->comments2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye')); ?>:</b>
	<?php echo CHtml::encode($data->eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('notperformedcomment')); ?>:</b>
	<?php echo CHtml::encode($data->notperformedcomment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Skotopicamplitudeawave')); ?>:</b>
	<?php echo CHtml::encode($data->Skotopicamplitudeawave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Skotopicamplitudebwave')); ?>:</b>
	<?php echo CHtml::encode($data->Skotopicamplitudebwave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Photopicamplitudeawave')); ?>:</b>
	<?php echo CHtml::encode($data->Photopicamplitudeawave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Photopicamplitudebwave')); ?>:</b>
	<?php echo CHtml::encode($data->Photopicamplitudebwave); ?>
	<br />

	*/ ?>

</div>