<?php
/* @var $this OpthalmologicalvisualacuitytestController */
/* @var $model Opthalmologicalvisualacuitytest */

$this->breadcrumbs=array(
	'Opthalmologicalvisualacuitytests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualacuitytest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalvisualacuitytest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalvisualacuitytest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>