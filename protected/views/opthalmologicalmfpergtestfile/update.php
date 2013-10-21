<?php
/* @var $this OpthalmologicalmfpergtestfileController */
/* @var $model Opthalmologicalmfpergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmfpergtestfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfpergtestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfpergtestfile', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalmfpergtestfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalmfpergtestfile', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalmfpergtestfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>