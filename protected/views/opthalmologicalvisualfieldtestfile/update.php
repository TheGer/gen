<?php
/* @var $this OpthalmologicalvisualfieldtestfileController */
/* @var $model Opthalmologicalvisualfieldtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalvisualfieldtestfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualfieldtestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalvisualfieldtestfile', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalvisualfieldtestfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalvisualfieldtestfile', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalvisualfieldtestfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>