<?php
/* @var $this OpthalmologicalergtestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalergtests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalergtest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalergtest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalergtests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
