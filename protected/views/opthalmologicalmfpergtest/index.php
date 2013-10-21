<?php
/* @var $this OpthalmologicalmfpergtestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalmfpergtests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalmfpergtest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalmfpergtest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalmfpergtests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
