<?php
/* @var $this PatientstaticfileController */
/* @var $data Patientstaticfile */
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('/patientstaticfile/view', 'id'=>$data->id)); ?>
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
        
        <b>Delete pedigree file</b>
	<?php echo CHtml::link('Delete',"#", array("submit"=>array('/patientstaticfile/delete', 'id'=>$data->id), 'confirm' => 'Are you sure?')); ?>
        <?php echo CHtml::link(CHtml::encode("Download File"), array('/patientstaticfile/download', 'id'=>$data->id)); ?>
	<br />

</div>