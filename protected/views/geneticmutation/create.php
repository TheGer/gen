<?php
/* @var $this GeneticmutationController */
/* @var $model Geneticmutation */

$this->breadcrumbs=array(
	'Geneticmutations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Geneticmutation', 'url'=>array('index')),
	array('label'=>'Manage Geneticmutation', 'url'=>array('admin')),
);
?>

<h1>Create Geneticmutation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>