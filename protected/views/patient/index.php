<?php
/* @var $this PatientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Patients',
);

$this->menu = array(
    array('label' => 'Create Patient', 'url' => array('/site/patientStep1')),
    array('label' => 'List All Patients', 'url' => array('index')),
    array('label' => 'Search Patients', 'url' => array('search')),
);
?>

<h1>Patients</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'columns' => array(
        'id',
        array('header' => 'Center id A', 'value' => '$data->patientcenters[0]->centeridA'),
        array('header' => 'Responsible Physician', 'value' => '$data->patientcenters[0]->doctoridA'),
        array('header' => 'File Status', 'value' => '$data->filestatus'),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{print}',
            'buttons' => array
            (
                'print'=>array(
                    'label'=>'Print',
                    'url'=>'Yii::app()->createUrl("patient/createpdf",array("id"=>$data->id))'
                )
            )
        ),
    ),
));
?>
