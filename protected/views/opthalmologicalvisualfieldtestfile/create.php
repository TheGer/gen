<?php
/* @var $this OpthalmologicalvisualfieldtestfileController */
/* @var $model Opthalmologicalvisualfieldtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalvisualfieldtestfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualfieldtestfile', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalvisualfieldtestfile', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalvisualfieldtestfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>