<?php
/* @var $this OpthalmologicalmfergtestfileController */
/* @var $model Opthalmologicalmfergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtestfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfergtestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfergtestfile', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalmfergtestfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalmfergtestfile', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalmfergtestfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>