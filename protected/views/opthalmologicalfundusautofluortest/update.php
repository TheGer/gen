<?php
/* @var $this OpthalmologicalfundusautofluortestController */
/* @var $model Opthalmologicalfundusautofluortest */

$this->breadcrumbs=array(
	'Opthalmologicalfundusautofluortests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalfundusautofluortest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalfundusautofluortest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalfundusautofluortest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalfundusautofluortest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalfundusautofluortest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>