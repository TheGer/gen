<?php
/* @var $this OpthalmologicalergtestfileController */
/* @var $model Opthalmologicalergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalergtestfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalergtestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalergtestfile', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalergtestfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalergtestfile', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalergtestfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>