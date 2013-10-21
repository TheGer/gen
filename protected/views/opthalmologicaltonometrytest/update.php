<?php
/* @var $this OpthalmologicaltonometrytestController */
/* @var $model Opthalmologicaltonometrytest */

$this->breadcrumbs=array(
	'Opthalmologicaltonometrytests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicaltonometrytest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicaltonometrytest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicaltonometrytest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicaltonometrytest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicaltonometrytest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>