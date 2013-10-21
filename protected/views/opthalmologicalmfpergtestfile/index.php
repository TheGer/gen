<?php
/* @var $this OpthalmologicalmfpergtestfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalmfpergtestfiles',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalmfpergtestfile', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalmfpergtestfile', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalmfpergtestfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
