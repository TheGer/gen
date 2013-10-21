<?php
/* @var $this OpthalmologicalcolorvisiontestController */
/* @var $model Opthalmologicalcolorvisiontest */

$this->breadcrumbs=array(
	'Opthalmologicalcolorvisiontests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalcolorvisiontest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalcolorvisiontest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalcolorvisiontest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>