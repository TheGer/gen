<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'List All Patients', 'url'=>array('index')),
        array('label'=>'Search Patients', 'url'=>array('search')),
	array('label'=>'Delete Patient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Update Center Specific Data', 'url'=>array('/site/patientStep1Update', 'id'=>$model->id)),
        array('label'=>'Update General Patient Data', 'url'=>array('update', 'id'=>$model->id)),
        array('label'=>'Update Genetic Data', 'url'=>array('genetics', 'id'=>$model->id)),
        array('label'=>'Update Opthalmologic Data', 'url'=>array('opthData', 'id'=>$model->id)),
);
?>

<h1>Create Patient</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>