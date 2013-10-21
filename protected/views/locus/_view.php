<?php
/* @var $this LocusController */
/* @var $data Locus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locusname')); ?>:</b>
	<?php echo CHtml::encode($data->locusname); ?>
	<br />


</div>