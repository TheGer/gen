<?php
/* @var $this OpthalmologicalergtestfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalergtestfiles',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalergtestfile', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalergtestfile', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalergtestfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
