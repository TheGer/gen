<?php
/* @var $this GeneticscreenedgeneController */
/* @var $data Geneticscreenedgene */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientgeneid')); ?>:</b>
	<?php echo CHtml::encode($data->patientgeneid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('testingmethodid')); ?>:</b>
	<?php echo CHtml::encode($data->testingmethodid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excluded')); ?>:</b>
	<?php echo CHtml::encode($data->excluded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	
         <b>Options</b>
	<?php echo CHtml::link('Remove',"#", array("submit"=>array('/geneticscreenedgene/delete', 'id'=>$data->id), 'confirm' => 'Are you sure?')); ?>
 
	<br />


</div>