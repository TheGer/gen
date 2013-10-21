<?php
/* @var $this OpthalmologicalcolorvisiontestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalcolorvisiontests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalcolorvisiontest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalcolorvisiontest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalcolorvisiontests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
