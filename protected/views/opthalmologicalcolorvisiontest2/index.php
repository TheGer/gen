<?php
/* @var $this Opthalmologicalcolorvisiontest2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalcolorvisiontest2s',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalcolorvisiontest2', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalcolorvisiontest2', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalcolorvisiontest2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
