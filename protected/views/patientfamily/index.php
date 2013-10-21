<?php
/* @var $this PatientfamilyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patientfamilies',
);

$this->menu=array(
	array('label'=>'Create Patientfamily', 'url'=>array('create')),
	array('label'=>'Manage Patientfamily', 'url'=>array('admin')),
);
?>

<h1>Patientfamilies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
