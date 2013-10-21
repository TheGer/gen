<?php
/* @var $this OpthalmologicalfsttestController */
/* @var $model Opthalmologicalfsttest */

$this->breadcrumbs=array(
	'Opthalmologicalfsttests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalfsttest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalfsttest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalfsttest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>