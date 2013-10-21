<?php
/* @var $this OpthalmologicalvisualfieldtestController */
/* @var $model Opthalmologicalvisualfieldtest */

$this->breadcrumbs=array(
	'Opthalmologicalvisualfieldtests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualfieldtest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalvisualfieldtest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalvisualfieldtest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>