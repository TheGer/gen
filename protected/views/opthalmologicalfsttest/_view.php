<?php
/* @var $this OpthalmologicalfsttestController */
/* @var $data Opthalmologicalfsttest */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('whitestimulusthreshold')); ?>:</b>
	<?php echo CHtml::encode($data->whitestimulusthreshold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('whitestimuluserrorblanks')); ?>:</b>
	<?php echo CHtml::encode($data->whitestimuluserrorblanks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('whitestimuluserrormax')); ?>:</b>
	<?php echo CHtml::encode($data->whitestimuluserrormax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bluestimulusthreshold')); ?>:</b>
	<?php echo CHtml::encode($data->bluestimulusthreshold); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bluestimuluserrorblanks')); ?>:</b>
	<?php echo CHtml::encode($data->bluestimuluserrorblanks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bluestimuluserrormax')); ?>:</b>
	<?php echo CHtml::encode($data->bluestimuluserrormax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redstimulusthreshold')); ?>:</b>
	<?php echo CHtml::encode($data->redstimulusthreshold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redstiumuluserrorblanks')); ?>:</b>
	<?php echo CHtml::encode($data->redstiumuluserrorblanks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redstimuluserrormax')); ?>:</b>
	<?php echo CHtml::encode($data->redstimuluserrormax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye')); ?>:</b>
	<?php echo CHtml::encode($data->eye); ?>
	<br />

	*/ ?>

</div>