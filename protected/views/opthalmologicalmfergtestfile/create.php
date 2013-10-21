<?php
/* @var $this OpthalmologicalmfergtestfileController */
/* @var $model Opthalmologicalmfergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtestfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfergtestfile', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalmfergtestfile', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalmfergtestfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>