<?php
/* @var $this OpthalmologicalmfergtestfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtestfiles',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalmfergtestfile', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalmfergtestfile', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalmfergtestfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
