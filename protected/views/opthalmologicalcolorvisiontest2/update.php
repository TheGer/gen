<?php
/* @var $this Opthalmologicalcolorvisiontest2Controller */
/* @var $model Opthalmologicalcolorvisiontest2 */

$this->breadcrumbs=array(
	'Opthalmologicalcolorvisiontest2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalcolorvisiontest2', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalcolorvisiontest2', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalcolorvisiontest2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalcolorvisiontest2', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalcolorvisiontest2 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>