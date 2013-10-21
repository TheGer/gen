<?php
/* @var $this OpthalmologicaltonometrytestController */
/* @var $model Opthalmologicaltonometrytest */

$this->breadcrumbs=array(
	'Opthalmologicaltonometrytests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicaltonometrytest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicaltonometrytest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicaltonometrytest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>