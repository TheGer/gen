<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'List All Patients', 'url'=>array('/patient/index')),
        array('label'=>'Search Patients', 'url'=>array('/patient/search')),
	array('label'=>'Delete Patient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('/patient/delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Update Center Specific Data', 'url'=>array('/site/patientStep1Update', 'id'=>$model->id)),
        array('label'=>'Update General Patient Data', 'url'=>array('/patient/update', 'id'=>$model->id)),
        array('label'=>'Update Genetics', 'url'=>array('/patient/genetics', 'id'=>$model->id)),
        array('label'=>'Update Patient Phenotype', 'url'=>array('/patient/opthData', 'id'=>$model->id)),
);
?>

<h1>Update General Patient Data <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>