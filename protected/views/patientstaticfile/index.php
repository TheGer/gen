<?php
/* @var $this PatientstaticfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patientstaticfiles',
);

$this->menu=array(
	array('label'=>'Create Patientstaticfile', 'url'=>array('create')),
	array('label'=>'Manage Patientstaticfile', 'url'=>array('admin')),
);
?>

<h1>Patientstaticfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
