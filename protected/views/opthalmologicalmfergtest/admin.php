<?php
/* @var $this OpthalmologicalmfergtestController */
/* @var $model Opthalmologicalmfergtest */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtests'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfergtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfergtest', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#opthalmologicalmfergtest-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Opthalmologicalmfergtests</h1>

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
	'id'=>'opthalmologicalmfergtest-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'examid',
		'eye',
		'nonperformedcomments',
		'device',
		'pupilsizeendoftest',
		/*
		'other',
		'Concentricring1',
		'Concentricring2',
		'Concentricring3',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
