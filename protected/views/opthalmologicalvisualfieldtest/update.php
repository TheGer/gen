<?php
/* @var $this OpthalmologicalvisualfieldtestController */
/* @var $model Opthalmologicalvisualfieldtest */

$this->breadcrumbs=array(
	'Opthalmologicalvisualfieldtests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualfieldtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalvisualfieldtest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalvisualfieldtest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalvisualfieldtest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalvisualfieldtest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>