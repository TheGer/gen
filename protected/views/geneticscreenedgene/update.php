<?php
/* @var $this GeneticscreenedgeneController */
/* @var $model Geneticscreenedgene */

$this->breadcrumbs=array(
	'Geneticscreenedgenes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Geneticscreenedgene', 'url'=>array('index')),
	array('label'=>'Create Geneticscreenedgene', 'url'=>array('create')),
	array('label'=>'View Geneticscreenedgene', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Geneticscreenedgene', 'url'=>array('admin')),
);
?>

<h1>Update Geneticscreenedgene <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>