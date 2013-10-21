<?php
/* @var $this LocusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Locuses',
);

$this->menu=array(
	array('label'=>'Create Locus', 'url'=>array('create')),
	array('label'=>'Manage Locus', 'url'=>array('admin')),
);
?>

<h1>Locuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
