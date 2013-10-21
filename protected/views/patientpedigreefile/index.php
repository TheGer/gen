<?php
/* @var $this PatientpedigreefileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patientpedigreefiles',
);

$this->menu=array(
	array('label'=>'Create Patientpedigreefile', 'url'=>array('create')),
	array('label'=>'Manage Patientpedigreefile', 'url'=>array('admin')),
);
?>

<h1>Patientpedigreefiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
