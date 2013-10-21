<?php
/* @var $this OpthalmologicalfsttestController */
/* @var $model Opthalmologicalfsttest */

$this->breadcrumbs=array(
	'Opthalmologicalfsttests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalfsttest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalfsttest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalfsttest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalfsttest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalfsttest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>