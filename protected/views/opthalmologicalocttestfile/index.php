<?php
/* @var $this OpthalmologicalocttestfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalocttestfiles',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalocttestfile', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalocttestfile', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalocttestfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
