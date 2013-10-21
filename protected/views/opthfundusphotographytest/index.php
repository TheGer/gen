<?php
/* @var $this OpthfundusphotographytestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthfundusphotographytests',
);

$this->menu=array(
	array('label'=>'Create Opthfundusphotographytest', 'url'=>array('create')),
	array('label'=>'Manage Opthfundusphotographytest', 'url'=>array('admin')),
);
?>

<h1>Opthfundusphotographytests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
