<?php
/* @var $this OpthfundusphotographytestController */
/* @var $model Opthfundusphotographytest */

$this->breadcrumbs=array(
	'Opthfundusphotographytests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthfundusphotographytest', 'url'=>array('index')),
	array('label'=>'Create Opthfundusphotographytest', 'url'=>array('create')),
	array('label'=>'View Opthfundusphotographytest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthfundusphotographytest', 'url'=>array('admin')),
);
?>

<h1>Update Opthfundusphotographytest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>