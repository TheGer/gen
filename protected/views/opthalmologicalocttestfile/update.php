<?php
/* @var $this OpthalmologicalocttestfileController */
/* @var $model Opthalmologicalocttestfile */

$this->breadcrumbs=array(
	'Opthalmologicalocttestfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalocttestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalocttestfile', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalocttestfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalocttestfile', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalocttestfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>