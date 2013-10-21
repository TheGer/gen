<?php
/* @var $this GeneticmutationController */
/* @var $data Geneticmutation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('geneid')); ?>:</b>
	<?php echo CHtml::encode($data->geneid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientgeneid')); ?>:</b>
	<?php echo CHtml::encode($data->patientgeneid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientlocusid')); ?>:</b>
	<?php echo CHtml::encode($data->patientlocusid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstallel')); ?>:</b>
	<?php echo CHtml::encode($data->firstallel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstallelmutation')); ?>:</b>
	<?php echo CHtml::encode($data->firstallelmutation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondallel')); ?>:</b>
	<?php echo CHtml::encode($data->secondallel); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('secondallelmutation')); ?>:</b>
	<?php echo CHtml::encode($data->secondallelmutation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thirdallel')); ?>:</b>
	<?php echo CHtml::encode($data->thirdallel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thirdallelmutation')); ?>:</b>
	<?php echo CHtml::encode($data->thirdallelmutation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fourthallel')); ?>:</b>
	<?php echo CHtml::encode($data->fourthallel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fourthallelmutation')); ?>:</b>
	<?php echo CHtml::encode($data->fourthallelmutation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mutationtype')); ?>:</b>
	<?php echo CHtml::encode($data->mutationtype); ?>
	<br />

	
        <b>Options</b>
	<?php echo CHtml::link('Remove',"#", array("submit"=>array('/geneticmutation/delete', 'id'=>$data->id), 'confirm' => 'Are you sure?')); ?>
 
	<br />


</div>