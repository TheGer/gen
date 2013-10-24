<?php
/* @var $this PatientgeneticsController */
/* @var $model Patientgenetics */
/* @var $form CActiveForm */


$url = '/patientgenetics/' . $action . '/'.$model->id;
?>

<div class="form">

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'patientgenetics-form',
    'action' => Yii::app()->createUrl($url),
    'enableAjaxValidation' => false,
        ));
?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

    <div class="row">

        <?php echo $form->hiddenField($model,'patientid'); ?>
        
        




    <div class="row">
<?php echo $form->labelEx($model, 'levelofcertainty'); ?>
        <?php echo $form->dropDownList($model, 'levelofcertainty', GeneralUtils::enumItem($model, 'levelofcertainty')); ?>
        <?php echo $form->error($model, 'levelofcertainty'); ?>
    </div>

 

    <div class="row">
<?php echo $form->labelEx($model, 'screenedformutations'); ?>
        <?php echo $form->dropDownList($model, 'screenedformutations', GeneralUtils::enumItem($model, 'screenedformutations')); ?>
        <?php echo $form->error($model, 'screenedformutations'); ?>
    </div>




    <div class="row">
<?php echo $form->labelEx($model, 'dateofscreening'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model, // Model object
            'attribute' => 'dateofscreening', // Attribute name
            'options' => array(
                'showAnim' => 'fold',
            ), // jquery plugin options
            'htmlOptions' => array('style' => 'height:20px;') // HTML options
        ));
        ?> 
        <?php echo $form->error($model, 'dateofscreening'); ?>
    </div>




    <div class="row buttons">
<?php echo CHtml::submitButton('Save'); ?>
    </div>
        <?php $this->endWidget(); ?>

    <h2> Responsible Mutations</h2>
    <!--list mutations here-->
<?php

    foreach ($model->mutations as $mutation) {
        $this->renderPartial('/geneticmutation/_view', array('data' => $mutation));
    }

    ?>
        <h2>Add a new mutation</h2>
        <?php
        $mutationmodel = new Geneticmutation;
        //link the file to the patient
        $mutationmodel->patientgeneid = $model->id;
        $this->renderPartial('/geneticmutation/_form', array('model' => $mutationmodel, 'action'=>'create'));
   
    ?>

    <h2>Screened Genes</h2>

    <?php
    
    foreach ($model->screenedgenes as $screenedgene) {
        $this->renderPartial('/geneticscreenedgene/_view', array('data' => $screenedgene));
    }
    
    
    ?>
    <h2>Add a new screened gene</h2>
    <?php
     $screenedgenemodel = new Geneticscreenedgene;
    //link the file to the patient
    $screenedgenemodel->patientgeneid = $model->id;
    $this->renderPartial('/geneticscreenedgene/_form', array('model' => $screenedgenemodel,'action'=>'create'));
    
    ?>




</div><!-- form -->