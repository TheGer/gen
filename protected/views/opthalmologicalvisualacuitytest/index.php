<?php
/* @var $this OpthalmologicalvisualacuitytestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalvisualacuitytests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalvisualacuitytest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalvisualacuitytest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalvisualacuitytests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
