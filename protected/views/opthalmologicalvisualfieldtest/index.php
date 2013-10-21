<?php
/* @var $this OpthalmologicalvisualfieldtestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalvisualfieldtests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalvisualfieldtest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalvisualfieldtest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalvisualfieldtests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
