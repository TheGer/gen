<?php
/* @var $this PatientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patients',
);

$this->menu=array(
        array('label'=>'Create Patient', 'url'=>array('/site/patientStep1')),
        array('label'=>'List All Patients', 'url'=>array('index')),
        array('label'=>'Search Patients', 'url'=>array('search')),
     
);
        
?>

<h1>Patients</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'confirmedmutation',
                'datesubmitted',
		'dateofbirth',
		'informedconsent',
                 array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}{update}{print}',
		),
                ),
            )); ?>
