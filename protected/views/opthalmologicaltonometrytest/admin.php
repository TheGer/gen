<?php
/* @var $this OpthalmologicaltonometrytestController */
/* @var $model Opthalmologicaltonometrytest */

$this->breadcrumbs=array(
	'Opthalmologicaltonometrytests'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Opthalmologicaltonometrytest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicaltonometrytest', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#opthalmologicaltonometrytest-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Opthalmologicaltonometrytests</h1>

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
	'id'=>'opthalmologicaltonometrytest-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'testid',
		'eye',
		'vocalaudiogram',
		'vocalvpp40',
		'vocalvmf40',
		/*
		'vocalvff40',
		'tonalaudiogram',
		'tonal250',
		'tonal500',
		'tonal1000',
		'tonal2000',
		'tonal3000',
		'tonal4000',
		'tonal6000',
		'tonal8000',
		'otospontanic',
		'otoprovoced',
		'otodistortionproducts',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
