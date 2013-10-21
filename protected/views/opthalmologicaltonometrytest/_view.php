<?php
/* @var $this OpthalmologicaltonometrytestController */
/* @var $data Opthalmologicaltonometrytest */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('vocalaudiogram')); ?>:</b>
	<?php echo CHtml::encode($data->vocalaudiogram); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vocalvpp40')); ?>:</b>
	<?php echo CHtml::encode($data->vocalvpp40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vocalvmf40')); ?>:</b>
	<?php echo CHtml::encode($data->vocalvmf40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vocalvff40')); ?>:</b>
	<?php echo CHtml::encode($data->vocalvff40); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tonalaudiogram')); ?>:</b>
	<?php echo CHtml::encode($data->tonalaudiogram); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tonal250')); ?>:</b>
	<?php echo CHtml::encode($data->tonal250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tonal500')); ?>:</b>
	<?php echo CHtml::encode($data->tonal500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tonal1000')); ?>:</b>
	<?php echo CHtml::encode($data->tonal1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tonal2000')); ?>:</b>
	<?php echo CHtml::encode($data->tonal2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tonal3000')); ?>:</b>
	<?php echo CHtml::encode($data->tonal3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tonal4000')); ?>:</b>
	<?php echo CHtml::encode($data->tonal4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tonal6000')); ?>:</b>
	<?php echo CHtml::encode($data->tonal6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tonal8000')); ?>:</b>
	<?php echo CHtml::encode($data->tonal8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otospontanic')); ?>:</b>
	<?php echo CHtml::encode($data->otospontanic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otoprovoced')); ?>:</b>
	<?php echo CHtml::encode($data->otoprovoced); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otodistortionproducts')); ?>:</b>
	<?php echo CHtml::encode($data->otodistortionproducts); ?>
	<br />

	*/ ?>

</div>