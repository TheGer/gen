<?php
/* @var $this OpthfundusphotographytestController */
/* @var $model Opthfundusphotographytest */

$this->breadcrumbs=array(
	'Opthfundusphotographytests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthfundusphotographytest', 'url'=>array('index')),
	array('label'=>'Manage Opthfundusphotographytest', 'url'=>array('admin')),
);
?>

<h1>Create Opthfundusphotographytest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>