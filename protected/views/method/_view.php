<?php
/* @var $this MethodController */
/* @var $data Method */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('methodname')); ?>:</b>
	<?php echo CHtml::encode($data->methodname); ?>
	<br />


</div>