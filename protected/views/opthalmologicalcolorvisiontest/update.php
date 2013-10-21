<?php
/* @var $this OpthalmologicalcolorvisiontestController */
/* @var $model Opthalmologicalcolorvisiontest */

$this->breadcrumbs=array(
	'Opthalmologicalcolorvisiontests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalcolorvisiontest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalcolorvisiontest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalcolorvisiontest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalcolorvisiontest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalcolorvisiontest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>