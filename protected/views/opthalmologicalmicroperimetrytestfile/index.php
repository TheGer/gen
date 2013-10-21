<?php
/* @var $this OpthalmologicalmicroperimetrytestfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalmicroperimetrytestfiles',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalmicroperimetrytestfile', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalmicroperimetrytestfile', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalmicroperimetrytestfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
