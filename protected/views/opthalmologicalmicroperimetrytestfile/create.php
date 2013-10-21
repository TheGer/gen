<?php
/* @var $this OpthalmologicalmicroperimetrytestfileController */
/* @var $model Opthalmologicalmicroperimetrytestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmicroperimetrytestfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmicroperimetrytestfile', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalmicroperimetrytestfile', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalmicroperimetrytestfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>