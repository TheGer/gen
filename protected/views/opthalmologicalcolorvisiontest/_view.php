<?php
/* @var $this OpthalmologicalcolorvisiontestController */
/* @var $data Opthalmologicalcolorvisiontest */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('performed')); ?>:</b>
	<?php echo CHtml::encode($data->performed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d15desaturatedorder')); ?>:</b>
	<?php echo CHtml::encode($data->d15desaturatedorder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d15saturatedorder')); ?>:</b>
	<?php echo CHtml::encode($data->d15saturatedorder); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('learesult')); ?>:</b>
	<?php echo CHtml::encode($data->learesult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hue28performed')); ?>:</b>
	<?php echo CHtml::encode($data->hue28performed); ?>
	<br />

	*/ ?>

</div>