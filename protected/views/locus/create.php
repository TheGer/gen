<?php
/* @var $this LocusController */
/* @var $model Locus */

$this->breadcrumbs=array(
	'Locuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Locus', 'url'=>array('index')),
	array('label'=>'Manage Locus', 'url'=>array('admin')),
);
?>

<h1>Create Locus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>