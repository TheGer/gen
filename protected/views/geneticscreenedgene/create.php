<?php
/* @var $this GeneticscreenedgeneController */
/* @var $model Geneticscreenedgene */

$this->breadcrumbs=array(
	'Geneticscreenedgenes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Geneticscreenedgene', 'url'=>array('index')),
	array('label'=>'Manage Geneticscreenedgene', 'url'=>array('admin')),
);
?>

<h1>Create Geneticscreenedgene</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>