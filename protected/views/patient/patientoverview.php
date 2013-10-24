<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'List All Patients', 'url'=>array('index')),
        array('label'=>'Search Patients', 'url'=>array('search')),
	//array('label'=>'Delete Patient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Center Specific Data', 'url'=>array('/site/patientStep1Update', 'id'=>$model->id)),
        array('label'=>'Manage General Patient Data', 'url'=>array('update', 'id'=>$model->id)),
        array('label'=>'Manage Genetic Data', 'url'=>array('genetics', 'id'=>$model->id)),
        array('label'=>'Manage Phenotype Data', 'url'=>array('/patientopthalmologicaldata/indexOfPatient', 'id'=>$model->id)),
);
?>

<h1>Patient Overview <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                array(
                  'name'=>'Center ID A',
                  'type'=>'html',
                  'value'=>$model->getRelatedCenters() 
                    
                ),
                array(
                    'name'=>'Responsible Dr',
                    'type'=>'html',
                    'value'=>$model->getRelatedDoctorId()
                ),
		'gender',
		'dateofbirth',
                'filestatus',
	),
)); ?>


