<?php
/* @var $this OpthalmologicalfsttestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalfsttests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalfsttest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalfsttest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalfsttests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
