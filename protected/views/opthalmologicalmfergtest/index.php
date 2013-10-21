<?php
/* @var $this OpthalmologicalmfergtestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalmfergtest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalmfergtest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalmfergtests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
