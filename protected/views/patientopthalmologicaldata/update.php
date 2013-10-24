<?php
/* @var $this PatientopthalmologicaldataController */
/* @var $model Patientopthalmologicaldata */

$this->breadcrumbs=array(
	'Patient Phenotype'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patient Phenotypes', 'url'=>array('index')),
	array('label'=>'Create Patient Phenotype', 'url'=>array('create')),
	array('label'=>'View Patient Phenotype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Patient Phenotypes', 'url'=>array('admin')),
);
?>

<h1>Update Patient Phenotype <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>