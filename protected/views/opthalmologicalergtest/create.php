<?php
/* @var $this OpthalmologicalergtestController */
/* @var $model Opthalmologicalergtest */

$this->breadcrumbs=array(
	'Opthalmologicalergtests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalergtest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalergtest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalergtest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>