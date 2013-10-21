<?php
/* @var $this OpthalmologicalmicroperimetrytestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalmicroperimetrytests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalmicroperimetrytest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalmicroperimetrytest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalmicroperimetrytests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
