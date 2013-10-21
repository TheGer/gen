<?php
/* @var $this PatientfamilydetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patientfamilydetails',
);

$this->menu=array(
	array('label'=>'Create Patientfamilydetails', 'url'=>array('create')),
	array('label'=>'Manage Patientfamilydetails', 'url'=>array('admin')),
);
?>

<h1>Patientfamilydetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
