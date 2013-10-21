<?php
/* @var $this OpthalmologicalvisualacuitytestController */
/* @var $data Opthalmologicalvisualacuitytest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('testid')); ?>:</b>
	<?php echo CHtml::encode($data->testid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye')); ?>:</b>
	<?php echo CHtml::encode($data->eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etdrsnumberofletters')); ?>:</b>
	<?php echo CHtml::encode($data->etdrsnumberofletters); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('learesult')); ?>:</b>
	<?php echo CHtml::encode($data->learesult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fingercount')); ?>:</b>
	<?php echo CHtml::encode($data->fingercount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('handmovement')); ?>:</b>
	<?php echo CHtml::encode($data->handmovement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lightperception')); ?>:</b>
	<?php echo CHtml::encode($data->lightperception); ?>
	<br />

	*/ ?>

</div>