<?php
/* @var $this OpthalmologicalmicroperimetrytestfileController */
/* @var $model Opthalmologicalmicroperimetrytestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmicroperimetrytestfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmicroperimetrytestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmicroperimetrytestfile', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalmicroperimetrytestfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalmicroperimetrytestfile', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalmicroperimetrytestfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>