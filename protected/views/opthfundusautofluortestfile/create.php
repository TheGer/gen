<?php
/* @var $this OpthfundusautofluortestfileController */
/* @var $model Opthfundusautofluortestfile */

$this->breadcrumbs=array(
	'Opthfundusautofluortestfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthfundusautofluortestfile', 'url'=>array('index')),
	array('label'=>'Manage Opthfundusautofluortestfile', 'url'=>array('admin')),
);
?>

<h1>Create Opthfundusautofluortestfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>