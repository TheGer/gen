<?php
/* @var $this OpthalmologicalvisualfieldtestfileController */
/* @var $data Opthalmologicalvisualfieldtestfile */
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('/opthalmologicalvisualfieldtestfile/view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientid')); ?>:</b>
	<?php echo CHtml::encode($data->patientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filepath')); ?>:</b>
	<?php echo CHtml::encode($data->filepath); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />
        
        <b>Delete file</b>
	<?php echo CHtml::link('Delete',"#", array("submit"=>array('/opthalmologicalvisualfieldtestfile/delete', 'id'=>$data->id), 'confirm' => 'Are you sure?')); ?>
        <?php echo CHtml::link(CHtml::encode("Download File"), array('/opthalmologicalvisualfieldtestfile/download', 'id'=>$data->id)); ?>
	<br />

</div>