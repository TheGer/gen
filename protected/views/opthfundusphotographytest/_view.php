<?php
/* @var $this OpthfundusphotographytestController */
/* @var $data Opthfundusphotographytest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examid')); ?>:</b>
	<?php echo CHtml::encode($data->examid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CDratio')); ?>:</b>
	<?php echo CHtml::encode($data->CDratio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye')); ?>:</b>
	<?php echo CHtml::encode($data->eye); ?>
	<br />


</div>