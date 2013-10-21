<?php
/* @var $this OpthfundusphotographytestfileController */
/* @var $model Opthfundusphotographytestfile */

$this->breadcrumbs=array(
	'Opthfundusphotographytestfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthfundusphotographytestfile', 'url'=>array('index')),
	array('label'=>'Create Opthfundusphotographytestfile', 'url'=>array('create')),
	array('label'=>'View Opthfundusphotographytestfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthfundusphotographytestfile', 'url'=>array('admin')),
);
?>

<h1>Update Opthfundusphotographytestfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>