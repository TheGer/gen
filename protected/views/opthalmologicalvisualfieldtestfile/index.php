<?php
/* @var $this OpthalmologicalvisualfieldtestfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalvisualfieldtestfiles',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalvisualfieldtestfile', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalvisualfieldtestfile', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalvisualfieldtestfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
