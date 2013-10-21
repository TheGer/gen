<?php
/* @var $this GeneticmutationController */
/* @var $model Geneticmutation */

$this->breadcrumbs=array(
	'Geneticmutations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Geneticmutation', 'url'=>array('index')),
	array('label'=>'Create Geneticmutation', 'url'=>array('create')),
	array('label'=>'View Geneticmutation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Geneticmutation', 'url'=>array('admin')),
);
?>

<h1>Update Geneticmutation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>