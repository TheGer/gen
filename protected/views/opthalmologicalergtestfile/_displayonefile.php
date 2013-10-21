<?php
/* @var $this OpthalmologicalergtestfileController */
/* @var $data Opthalmologicalergtest */
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
	<?php echo CHtml::encode($data->path); ?>
	<br />
        
        <b>Delete file</b>
	<?php echo CHtml::link('Delete',"#", array("submit"=>array('/opthalmologicalergtestfile/delete', 'id'=>$data->id), 'confirm' => 'Are you sure?')); ?>
        <?php echo CHtml::link(CHtml::encode("Download File"), array('/opthalmologicalergtestfile/download', 'id'=>$data->id)); ?>
	<br />

</div>