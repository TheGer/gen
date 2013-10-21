<?php
/* @var $this OpthalmologicalfundusautofluortestController */
/* @var $model Opthalmologicalfundusautofluortest */

$this->breadcrumbs=array(
	'Opthalmologicalfundusautofluortests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalfundusautofluortest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalfundusautofluortest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalfundusautofluortest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>