<?php
/* @var $this OpthfundusautofluortestfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthfundusautofluortestfiles',
);

$this->menu=array(
	array('label'=>'Create Opthfundusautofluortestfile', 'url'=>array('create')),
	array('label'=>'Manage Opthfundusautofluortestfile', 'url'=>array('admin')),
);
?>

<h1>Opthfundusautofluortestfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
