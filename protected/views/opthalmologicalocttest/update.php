<?php
/* @var $this OpthalmologicalocttestController */
/* @var $model Opthalmologicalocttest */

$this->breadcrumbs=array(
	'Opthalmologicalocttests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalocttest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalocttest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalocttest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalocttest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalocttest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>