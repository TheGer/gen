<?php
/* @var $this OpthalmologicalocttestController */
/* @var $model Opthalmologicalocttest */

$this->breadcrumbs=array(
	'Opthalmologicalocttests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalocttest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalocttest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalocttest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>