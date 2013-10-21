<?php
/* @var $this OpthalmologicalocttestfileController */
/* @var $model Opthalmologicalocttestfile */

$this->breadcrumbs=array(
	'Opthalmologicalocttestfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalocttestfile', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalocttestfile', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalocttestfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>