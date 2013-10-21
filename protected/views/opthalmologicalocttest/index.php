<?php
/* @var $this OpthalmologicalocttestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalocttests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalocttest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalocttest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalocttests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
