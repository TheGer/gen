<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	'Search',
);

$this->menu=array(
        array('label'=>'List All Patients', 'url'=>array('index')),
        array('label'=>'Search Patients', 'url'=>array('search')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#patient-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Search Patients</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'patient-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'confirmedmutation',
		'patient.patientcenters.centeridA',
		'responsiblephysician',
                'datesubmitted',
		'dateofbirth',
		'informedconsent',
                 array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}{update}',
		),
		/*

		'confirmedby',
		'diagnosis',
		'establishedat',
		'diagnosiskeys',
		'description',
		'secondarydiagnosiskeys',
		'secondarydescription',
		'nightblindness',
		'nightblindnessage',
		'decreasedvisualac',
		'decreasedvisualacage',
		'sensibilitytolight',
		'sensibilitytolightage',
		'clearvision',
		'clearvisionage',
		'sidevision',
		'sidevisionage',
		'readingdifficulties',
		'readingdifficultiesage',
		'parentsorigin',
		'sporadicorfamily',
		'cosanguinity',
		'numberofaffectedfamilymembers',
		'children',
		'numberofchildrenaffected',
		'numberofchildrennonaffected',
		'numberofchildrenunknownstatus',
		'siblings',
		'numberofsiblingsaffected',
		'numberofsiblingsnotaffected',
		'numberofsiblingsunknown',
		'twins',
		'numberoftwinsaffected',
		'numberoftwinsnotaffected',
		'numberoftwinsunknown',
		'pedigreeavailable',
		*/
	),
)); ?>