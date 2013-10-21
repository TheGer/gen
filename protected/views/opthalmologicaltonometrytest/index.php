<?php
/* @var $this OpthalmologicaltonometrytestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicaltonometrytests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicaltonometrytest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicaltonometrytest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicaltonometrytests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
