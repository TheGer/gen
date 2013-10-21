<?php
/* @var $this OpthalmologicalmicroperimetrytestController */
/* @var $model Opthalmologicalmicroperimetrytest */

$this->breadcrumbs=array(
	'Opthalmologicalmicroperimetrytests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmicroperimetrytest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmicroperimetrytest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalmicroperimetrytest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalmicroperimetrytest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalmicroperimetrytest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>