<?php
/* @var $this GeneticmutationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Geneticmutations',
);

$this->menu=array(
	array('label'=>'Create Geneticmutation', 'url'=>array('create')),
	array('label'=>'Manage Geneticmutation', 'url'=>array('admin')),
);
?>

<h1>Geneticmutations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
