<?php
/* @var $this PatientcenterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patientcenters',
);

$this->menu=array(
	array('label'=>'Create Patientcenter', 'url'=>array('create')),
	array('label'=>'Manage Patientcenter', 'url'=>array('admin')),
);
?>

<h1>Patientcenters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
