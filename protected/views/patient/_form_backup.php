<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'patient-form',
        'enableAjaxValidation' => false,
        'htmlOptions' =>
        array('enctype' => 'multipart/form-data'),
    ));
    ?>

    <?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/patientscript.js');
    ?>
    
      

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'systemid'); ?>
        <?php echo $form->textField($model, 'systemid', array('readonly'=>true)); ?>
        <?php echo $form->error($model, 'systemid'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->dropDownList($model, 'gender', GeneralUtils::getGenderOptions(), array('empty' => '(Select a gender)')); ?>
        <?php echo $form->error($model, 'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'placeofbirth'); ?>
        <?php echo $form->textField($model, 'placeofbirth', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'placeofbirth'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'dateofbirth'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model, // Model object
            'attribute' => 'dateofbirth', // Attribute name
            'options' => array(
                'showAnim' => 'fold',
            ), // jquery plugin options
            'htmlOptions' => array('style' => 'height:20px;') // HTML options
        ));
        ?> 
        <?php echo $form->error($model, 'dateofbirth'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'informedconsent'); ?>
        <?php echo $form->textField($model, 'informedconsent', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'informedconsent'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'confirmedmutation'); ?>
        <?php echo $form->dropDownList($model, 'confirmedmutation', GeneralUtils::enumItem($model, 'confirmedmutation')); ?>
        <?php echo $form->error($model, 'confirmedmutation'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'confirmedby'); ?>
        <?php echo $form->textField($model, 'confirmedby', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'confirmedby'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'diagnosis'); ?>
        <?php echo $form->textField($model, 'diagnosis'); ?>
        <?php echo $form->error($model, 'diagnosis'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'establishedat'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model, // Model object
            'attribute' => 'establishedat', // Attribute name
            'options' => array(
                'showAnim' => 'fold',
            ), // jquery plugin options
            'htmlOptions' => array('style' => 'height:20px;') // HTML options
        ));
        ?> 
        <?php echo $form->error($model, 'establishedat'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'diagnosiskeys'); ?>
        <?php echo $form->textArea($model, 'diagnosiskeys', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'diagnosiskeys'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <h2>Ophtalmology Anamnesis</h2>
    <hr/>

    <div class="row">
        <?php echo $form->labelEx($model, 'secondarydiagnosisexisting'); ?>
        <?php echo $form->dropDownList($model, 'secondarydiagnosisexisting', GeneralUtils::getOptions(), array('empty' => 'Not applicable')); ?>
        <?php echo $form->error($model, 'secondarydiagnosisexisting'); ?>
    </div>

    <!-- night blindness -->
    <div class="row">
        <?php echo $form->labelEx($model, 'nightblindnessage'); ?>
        <?php echo $form->textField($model, 'nightblindnessage'); ?>
        <?php echo $form->error($model, 'nightblindnessage'); ?>
    </div>

    <!-- restriction of visual field -->
     <div class="row">
        <?php echo $form->labelEx($model, 'sidevisionage'); ?>
        <?php echo $form->textField($model, 'sidevisionage'); ?>
        <?php echo $form->error($model, 'sidevisionage'); ?>
    </div>
    
    <!-- decreased visual acuity -->
    <div class="row">
        <?php echo $form->labelEx($model, 'decreasedvisualacage'); ?>
        <?php echo $form->textField($model, 'decreasedvisualacage'); ?>
        <?php echo $form->error($model, 'decreasedvisualacage'); ?>
    </div>
    
    
    <!-- photophobia -->
    <div class="row">
        <?php echo $form->labelEx($model, 'sensibilitytolightage'); ?>
        <?php echo $form->textField($model, 'sensibilitytolightage'); ?>
        <?php echo $form->error($model, 'sensibilitytolightage'); ?>
    </div>
    
    <!-- color vision problems -->
    <div class="row">
        <?php echo $form->labelEx($model, 'colourvisionage'); ?>
        <?php echo $form->textField($model, 'colourvisionage'); ?>
        <?php echo $form->error($model, 'colourvisionage'); ?>
    </div>

    <!-- nystagmus -->
    <div class="row">
        <?php echo $form->labelEx($model, 'nystagmus'); ?>
        <?php echo $form->textField($model, 'nystagmus'); ?>
        <?php echo $form->error($model, 'nystagmus'); ?>
    </div>
    
    
    <!-- scotome perception -->
    <div class="row">
        <?php echo $form->labelEx($model, 'scotome'); ?>
        <?php echo $form->textField($model, 'scotome'); ?>
        <?php echo $form->error($model, 'scotome'); ?>
    </div>
    <!-- phosphenes perception -->
    <div class="row">
        <?php echo $form->labelEx($model, 'phosphenes'); ?>
        <?php echo $form->textField($model, 'phosphenes'); ?>
        <?php echo $form->error($model, 'phosphenes'); ?>
    </div>
    
    <!--other comments -->
    <div class="row" class="secondary">
        <?php echo $form->labelEx($model, 'othercomments'); ?>
        <?php echo $form->textArea($model, 'othercomments', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'othercomments'); ?>
    </div>

    
    
    
    <hr/>
    <h3>Family Anamnesis</h3>
    <div class="row">
        <?php echo $form->labelEx($model, 'parentsorigin'); ?>
        <?php echo $form->textField($model, 'parentsorigin', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'parentsorigin'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'sporadicorfamily'); ?>
        <?php echo $form->dropDownList($model, 'sporadicorfamily', GeneralUtils::sporadicOrFamily(), array('not applicable' => 'Not applicable')); ?>
        <?php echo $form->error($model, 'sporadicorfamily'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'cosanguinity'); ?>
        <?php echo $form->dropDownList($model, 'cosanguinity', GeneralUtils::consanguinity(), array('not applicable' => 'Not applicable')); ?>
        <?php echo $form->error($model, 'cosanguinity'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberofaffectedfamilymembers'); ?>
        <?php echo $form->textField($model, 'numberofaffectedfamilymembers'); ?>
        <?php echo $form->error($model, 'numberofaffectedfamilymembers'); ?>
    </div>

    
   
    
    
    <div class="row">
        <?php echo $form->labelEx($model, 'children'); ?>
        <?php echo $form->dropDownList($model, 'children', GeneralUtils::getOptions(), array('empty' => 'Not applicable')); ?>
        <?php echo $form->error($model, 'children'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberofchildrenaffected'); ?>
        <?php echo $form->textField($model, 'numberofchildrenaffected'); ?>
        <?php echo $form->error($model, 'numberofchildrenaffected'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberofchildrennonaffected'); ?>
        <?php echo $form->textField($model, 'numberofchildrennonaffected'); ?>
        <?php echo $form->error($model, 'numberofchildrennonaffected'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberofchildrenunknownstatus'); ?>
        <?php echo $form->textField($model, 'numberofchildrenunknownstatus'); ?>
        <?php echo $form->error($model, 'numberofchildrenunknownstatus'); ?>
    </div>
   

    <div class="row">
        <?php echo $form->labelEx($model, 'siblings'); ?>
        <?php echo $form->dropDownList($model, 'siblings', GeneralUtils::getOptions(), array('empty' => 'Not applicable')); ?>
        <?php echo $form->error($model, 'siblings'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberofsiblingsaffected'); ?>
        <?php echo $form->textField($model, 'numberofsiblingsaffected'); ?>
        <?php echo $form->error($model, 'numberofsiblingsaffected'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberofsiblingsnotaffected'); ?>
        <?php echo $form->textField($model, 'numberofsiblingsnotaffected'); ?>
        <?php echo $form->error($model, 'numberofsiblingsnotaffected'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberofsiblingsunknown'); ?>
        <?php echo $form->textField($model, 'numberofsiblingsunknown'); ?>
        <?php echo $form->error($model, 'numberofsiblingsunknown'); ?>
    </div>
 
    <div class="row">
        <?php echo $form->labelEx($model, 'twins'); ?>
        <?php echo $form->dropDownList($model, 'twins', GeneralUtils::getOptions(), array('empty' => 'Not applicable')); ?>
        <?php echo $form->error($model, 'twins'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberoftwinsaffected'); ?>
        <?php echo $form->textField($model, 'numberoftwinsaffected'); ?>
        <?php echo $form->error($model, 'numberoftwinsaffected'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberoftwinsnotaffected'); ?>
        <?php echo $form->textField($model, 'numberoftwinsnotaffected'); ?>
        <?php echo $form->error($model, 'numberoftwinsnotaffected'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numberoftwinsunknown'); ?>
        <?php echo $form->textField($model, 'numberoftwinsunknown'); ?>
        <?php echo $form->error($model, 'numberoftwinsunknown'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'pedigreeavailable'); ?>
        <?php echo $form->dropDownList($model, 'twins', GeneralUtils::getOptions(), array('empty' => 'Not applicable')); ?>
        <?php echo $form->error($model, 'pedigreeavailable'); ?>
    </div>
    
    <div class="row buttons">
        <?php echo CHtml::submitButton('Save'); ?>
    </div>

    <?php $this->endWidget(); ?>
    <h2>Uploaded Pedigree files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->patientpedigreefiles as $pfile) {
        $this->renderPartial('/patientpedigreefile/_displayonefile', array('data' => $pfile));
    }
    ?>
    <h2>Add a new file</h2>
    <?php
    $filemodel = new Patientpedigreefile;
    //link the file to the patient
    $filemodel->patientid = $model->id;
    $this->renderPartial('/patientpedigreefile/_form', array('model' => $filemodel));
    ?>
    <hr/>
    <h2>Uploaded Static files:</h2>
    <!--list files here-->
    <?php
    foreach ($model->patientstaticfiles as $pfile) {
        $this->renderPartial('/patientstaticfile/_displayonefile', array('data' => $pfile));
    }
    ?>
    <h2>Add a new file</h2>
    <?php
    $filemodel = new Patientpedigreefile;
    //link the file to the patient
    $filemodel->patientid = $model->id;
    $this->renderPartial('/patientstaticfile/_form', array('model' => $filemodel));
    ?>
    

</div><!-- form -->