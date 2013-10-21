<?php
/* @var $this FamilyController */
/* @var $model Family */
/* @var $model2 Patient */
/* @var $model2arr Patient[] */


$this->breadcrumbs=array(
	'Families'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Family', 'url'=>array('index')),
	array('label'=>'Create Family', 'url'=>array('create')),
	array('label'=>'Update Family', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Family', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Family', 'url'=>array('admin')),
        array('label'=>'Add patient', 'url'=>array('assignPatient','id'=>$model->id)),
        
);
?>

<h1>View Family #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'systemid',
		'comment',
	),
)); ?>

<h2>All patients</h2>
<?php foreach($model2arr as $model2): ?>

<?php echo CHtml::link($model2->systemid.'<br/>', '#', array(
    'submit'=>array('assignpatient', 'id'=>$model->id),
    'params'=>array('patientid'=>$model2->id),
 
)); ?>


    
<?php endforeach ?>
