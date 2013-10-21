<?php
/* @var $this PatientgeneticsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patientgenetics',
);

$this->menu=array(
	array('label'=>'Create Patientgenetics', 'url'=>array('create')),
	array('label'=>'Manage Patientgenetics', 'url'=>array('admin')),
);
?>

<h1>Patientgenetics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
