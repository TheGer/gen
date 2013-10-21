<?php
/* @var $this OpthalmologicalvisualacuitytestController */
/* @var $model Opthalmologicalvisualacuitytest */

$this->breadcrumbs=array(
	'Opthalmologicalvisualacuitytests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualacuitytest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalvisualacuitytest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalvisualacuitytest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalvisualacuitytest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalvisualacuitytest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>