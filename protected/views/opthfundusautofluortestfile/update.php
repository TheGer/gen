<?php
/* @var $this OpthfundusautofluortestfileController */
/* @var $model Opthfundusautofluortestfile */

$this->breadcrumbs=array(
	'Opthfundusautofluortestfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthfundusautofluortestfile', 'url'=>array('index')),
	array('label'=>'Create Opthfundusautofluortestfile', 'url'=>array('create')),
	array('label'=>'View Opthfundusautofluortestfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthfundusautofluortestfile', 'url'=>array('admin')),
);
?>

<h1>Update Opthfundusautofluortestfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>