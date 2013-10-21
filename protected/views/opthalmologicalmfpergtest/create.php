<?php
/* @var $this OpthalmologicalmfpergtestController */
/* @var $model Opthalmologicalmfpergtest */

$this->breadcrumbs=array(
	'Opthalmologicalmfpergtests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfpergtest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalmfpergtest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalmfpergtest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>