<?php
/* @var $this SiteController */
/* @var $model StatisticsForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Statistics';
$this->breadcrumbs=array(
	'Statistics',
);



?>
<div class="form">
<h1>Statistics</h1>


<p>A list of queries for the commonly used terms</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'statistics-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions'=>array(
        'class'=>'statisticsformclass',
    ),
)); ?>


<!-- create a statistics form -->

<div class="row">
    <p>Please enter a search query below</p>
    <?php echo $form->textField($model,'query'); ?>
    
</div>

<div class="row buttons">
		<?php echo CHtml::submitButton('Query'); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->

