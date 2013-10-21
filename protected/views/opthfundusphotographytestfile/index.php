<?php
/* @var $this OpthfundusphotographytestfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthfundusphotographytestfiles',
);

$this->menu=array(
	array('label'=>'Create Opthfundusphotographytestfile', 'url'=>array('create')),
	array('label'=>'Manage Opthfundusphotographytestfile', 'url'=>array('admin')),
);
?>

<h1>Opthfundusphotographytestfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
