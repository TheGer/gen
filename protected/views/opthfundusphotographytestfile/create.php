<?php
/* @var $this OpthfundusphotographytestfileController */
/* @var $model Opthfundusphotographytestfile */

$this->breadcrumbs=array(
	'Opthfundusphotographytestfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthfundusphotographytestfile', 'url'=>array('index')),
	array('label'=>'Manage Opthfundusphotographytestfile', 'url'=>array('admin')),
);
?>

<h1>Create Opthfundusphotographytestfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>