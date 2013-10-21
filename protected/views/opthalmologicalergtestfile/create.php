<?php
/* @var $this OpthalmologicalergtestfileController */
/* @var $model Opthalmologicalergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalergtestfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalergtestfile', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalergtestfile', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalergtestfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>