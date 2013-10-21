<?php
/* @var $this OpthalmologicalmicroperimetrytestController */
/* @var $model Opthalmologicalmicroperimetrytest */

$this->breadcrumbs=array(
	'Opthalmologicalmicroperimetrytests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmicroperimetrytest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalmicroperimetrytest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalmicroperimetrytest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>