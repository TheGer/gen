<?php
/* @var $this PatientopthalmologicaldataController */
/* @var $model Patientopthalmologicaldata */

$this->breadcrumbs=array(
	'Patientopthalmologicaldatas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Phenotype Data', 'url'=>array('index')),
	array('label'=>'Manage Phenotype Data', 'url'=>array('admin')),
);
?>

<h1>Create Phenotype Data</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>