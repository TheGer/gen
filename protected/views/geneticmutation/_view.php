<?php
/* @var $this GeneticmutationController */
/* @var $data Geneticmutation */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
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



    <b><?php echo CHtml::encode($data->getAttributeLabel('responsiblegene')); ?>:</b>
    <?php echo CHtml::encode($data->responsiblegene); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nomenclaturedna')); ?>:</b>
    <?php echo CHtml::encode($data->nomenclaturedna); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nomenclatureprotein')); ?>:</b>
    <?php echo CHtml::encode($data->nomenclatureprotein); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('classificationlist')); ?>:</b>
    <?php echo CHtml::encode($data->classificationlist); ?>
    <br />


    <b><?php echo CHtml::encode($data->getAttributeLabel('typeofmutation')); ?>:</b>
    <?php echo CHtml::encode($data->typeofmutation); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('allele')); ?>:</b>
    <?php echo CHtml::encode($data->allele); ?>
    <br />


    <b>Options</b>
    <?php echo CHtml::link('Remove', "#", array("submit" => array('/geneticmutation/delete', 'id' => $data->id), 'confirm' => 'Are you sure?')); ?>

    <br />


</div>