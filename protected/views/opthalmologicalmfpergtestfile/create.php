<?php
/* @var $this OpthalmologicalmfpergtestfileController */
/* @var $model Opthalmologicalmfpergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmfpergtestfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfpergtestfile', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalmfpergtestfile', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalmfpergtestfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>