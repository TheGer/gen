<?php
/* @var $this GeneticscreenedgeneController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Geneticscreenedgenes',
);

$this->menu=array(
	array('label'=>'Create Geneticscreenedgene', 'url'=>array('create')),
	array('label'=>'Manage Geneticscreenedgene', 'url'=>array('admin')),
);
?>

<h1>Geneticscreenedgenes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
