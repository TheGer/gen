<?php
/* @var $this OpthalmologicalfundusautofluortestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opthalmologicalfundusautofluortests',
);

$this->menu=array(
	array('label'=>'Create Opthalmologicalfundusautofluortest', 'url'=>array('create')),
	array('label'=>'Manage Opthalmologicalfundusautofluortest', 'url'=>array('admin')),
);
?>

<h1>Opthalmologicalfundusautofluortests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
