<?php
/* @var $this PatientopthalmologicaldataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patients'=>array('patient/index'),
	$patientid=>array('patient/patientStep2/'.$patientid),
        'Phenotype Data',
);


$this->menu=array(
	array('label'=>'Create Phenotype Data', 'url'=>array('create','patientid'=>$patientid)),
	array('label'=>'Manage Phenotype Data', 'url'=>array('admin','patientid'=>$patientid)),
);
?>

<h1>Phenotype Data</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array('id',
             array('header'=>'Center id A','value'=>'$data->patient->patientcenters[0]->centeridA'),
            array('header'=>'Responsible Physician','value'=>'$data->patient->patientcenters[0]->doctoridA'),
            'examinationdate',
             array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}{update}',
		),),
)); ?>
