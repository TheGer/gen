<?php
/* @var $this PatientfamilydetailsController */
/* @var $model Patientfamilydetails */

$this->breadcrumbs=array(
	'Patientfamilydetails'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Patientfamilydetails', 'url'=>array('index')),
	array('label'=>'Create Patientfamilydetails', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#patientfamilydetails-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Patientfamilydetails</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'patientfamilydetails-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'patientid',
		'parentsorigin',
		'sporadicorfamily',
		'consanguinity',
		'numberofaffectedfamily',
		/*
		'children',
		'numberofchildrenaffected',
		'numberofchildrennonaffected',
		'numberofchildrenunknownstatus',
		'siblings',
		'numberofsiblingsaffected',
		'numberofsiblingsnonaffected',
		'numberofsiblingsunknownstatus',
		'twins',
		'numberoftwinsaffected',
		'numberoftwinsnotaffected',
		'numberoftwinsunknownstatus',
		'pedigreeavailable',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
