<?php
/* @var $this PatientController */
/* @var $data Patient */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('systemid')); ?>:</b>
	<?php echo CHtml::encode($data->systemid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateofbirth')); ?>:</b>
	<?php echo CHtml::encode($data->dateofbirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informedconsent')); ?>:</b>
	<?php echo CHtml::encode($data->informedconsent); ?>
	<br />

        
	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmedmutation')); ?>:</b>
	<?php echo CHtml::encode($data->confirmedmutation); ?>
	<br />
        
        <b>File Complete:</b>
	<?php 
        if ($data->confirmedmutation != '')
        {
            $output = 'YES';
        }
        else
        {
            $output = 'NO';
        }
        
        echo CHtml::encode($output); ?>
	<br />
        
        <b>File Submitted:</b>
	<?php 
         if ($data->patientpedigreefiles != '')
        {
            $output = 'YES';
        }
        else
        {
            $output = 'NO';
        }
        
        
        echo CHtml::encode($output); ?>
	<br />
        
        
        
	<?php /*
         
       <b><?php echo CHtml::encode($data->getAttributeLabel('placeofbirth')); ?>:</b>
	<?php echo CHtml::encode($data->placeofbirth); ?>
	<br />
         
	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmedby')); ?>:</b>
	<?php echo CHtml::encode($data->confirmedby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('establishedat')); ?>:</b>
	<?php echo CHtml::encode($data->establishedat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosiskeys')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosiskeys); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondarydiagnosiskeys')); ?>:</b>
	<?php echo CHtml::encode($data->secondarydiagnosiskeys); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondarydescription')); ?>:</b>
	<?php echo CHtml::encode($data->secondarydescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nightblindness')); ?>:</b>
	<?php echo CHtml::encode($data->nightblindness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nightblindnessage')); ?>:</b>
	<?php echo CHtml::encode($data->nightblindnessage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decreasedvisualac')); ?>:</b>
	<?php echo CHtml::encode($data->decreasedvisualac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decreasedvisualacage')); ?>:</b>
	<?php echo CHtml::encode($data->decreasedvisualacage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensibilitytolight')); ?>:</b>
	<?php echo CHtml::encode($data->sensibilitytolight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensibilitytolightage')); ?>:</b>
	<?php echo CHtml::encode($data->sensibilitytolightage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clearvision')); ?>:</b>
	<?php echo CHtml::encode($data->clearvision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clearvisionage')); ?>:</b>
	<?php echo CHtml::encode($data->clearvisionage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sidevision')); ?>:</b>
	<?php echo CHtml::encode($data->sidevision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sidevisionage')); ?>:</b>
	<?php echo CHtml::encode($data->sidevisionage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('readingdifficulties')); ?>:</b>
	<?php echo CHtml::encode($data->readingdifficulties); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('readingdifficultiesage')); ?>:</b>
	<?php echo CHtml::encode($data->readingdifficultiesage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentsorigin')); ?>:</b>
	<?php echo CHtml::encode($data->parentsorigin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sporadicorfamily')); ?>:</b>
	<?php echo CHtml::encode($data->sporadicorfamily); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cosanguinity')); ?>:</b>
	<?php echo CHtml::encode($data->cosanguinity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofaffectedfamilymembers')); ?>:</b>
	<?php echo CHtml::encode($data->numberofaffectedfamilymembers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('children')); ?>:</b>
	<?php echo CHtml::encode($data->children); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofchildrenaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberofchildrenaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofchildrennonaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberofchildrennonaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofchildrenunknownstatus')); ?>:</b>
	<?php echo CHtml::encode($data->numberofchildrenunknownstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('siblings')); ?>:</b>
	<?php echo CHtml::encode($data->siblings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofsiblingsaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberofsiblingsaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofsiblingsnotaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberofsiblingsnotaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofsiblingsunknown')); ?>:</b>
	<?php echo CHtml::encode($data->numberofsiblingsunknown); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('twins')); ?>:</b>
	<?php echo CHtml::encode($data->twins); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberoftwinsaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberoftwinsaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberoftwinsnotaffected')); ?>:</b>
	<?php echo CHtml::encode($data->numberoftwinsnotaffected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberoftwinsunknown')); ?>:</b>
	<?php echo CHtml::encode($data->numberoftwinsunknown); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedigreeavailable')); ?>:</b>
	<?php echo CHtml::encode($data->pedigreeavailable); ?>
	<br />

	*/ ?>

</div>