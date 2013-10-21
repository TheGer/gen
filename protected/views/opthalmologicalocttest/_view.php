<?php
/* @var $this OpthalmologicalocttestController */
/* @var $data Opthalmologicalocttest */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('notperformedcomments')); ?>:</b>
	<?php echo CHtml::encode($data->notperformedcomments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device')); ?>:</b>
	<?php echo CHtml::encode($data->device); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fovealthickness')); ?>:</b>
	<?php echo CHtml::encode($data->fovealthickness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('othercomments')); ?>:</b>
	<?php echo CHtml::encode($data->othercomments); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('centralmaculathickness')); ?>:</b>
	<?php echo CHtml::encode($data->centralmaculathickness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glosis')); ?>:</b>
	<?php echo CHtml::encode($data->glosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('epiretinalmembrane')); ?>:</b>
	<?php echo CHtml::encode($data->epiretinalmembrane); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maculahole')); ?>:</b>
	<?php echo CHtml::encode($data->maculahole); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maculaedema')); ?>:</b>
	<?php echo CHtml::encode($data->maculaedema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cysticchanges')); ?>:</b>
	<?php echo CHtml::encode($data->cysticchanges); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preservedisos')); ?>:</b>
	<?php echo CHtml::encode($data->preservedisos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isoshorizontallength')); ?>:</b>
	<?php echo CHtml::encode($data->isoshorizontallength); ?>
	<br />

	*/ ?>

</div>