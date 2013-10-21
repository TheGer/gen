<?php
/* @var $this OpthalmologicalvisualfieldtestController */
/* @var $data Opthalmologicalvisualfieldtest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examid')); ?>:</b>
	<?php echo CHtml::encode($data->examid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('performed')); ?>:</b>
	<?php echo CHtml::encode($data->performed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device')); ?>:</b>
	<?php echo CHtml::encode($data->device); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye')); ?>:</b>
	<?php echo CHtml::encode($data->eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notperformedcomment')); ?>:</b>
	<?php echo CHtml::encode($data->notperformedcomment); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('centralsensitivity')); ?>:</b>
	<?php echo CHtml::encode($data->centralsensitivity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preservedcentralzone')); ?>:</b>
	<?php echo CHtml::encode($data->preservedcentralzone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preservedislandinperiphery')); ?>:</b>
	<?php echo CHtml::encode($data->preservedislandinperiphery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blindspot')); ?>:</b>
	<?php echo CHtml::encode($data->blindspot); ?>
	<br />

	*/ ?>

</div>