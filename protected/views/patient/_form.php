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
    Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
    //Yii::app()->getClientScript()->registerCoreScript('xmltree');
    Yii::app()->clientScript->registerCssFile(
    Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/icd10script.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/patientscript.js');
 
    ?>

    <?php echo $form->errorSummary($model); ?>

    
    <div id="icd10" style="display:none;overflow:auto">
 <?php $this->widget('CTreeView',
	array(
               // 'model'=>$model,
                //'attribute'=>'diagnosiskeys',
		'url'=>array('LoadXmlFile'),
		'animated'=>'normal',
		'htmlOptions'=>array('style'=>'height:20px;'))); ?>
        
    </div>
    

    <div class="row">
        <?php echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->dropDownList($model, 'gender', GeneralUtils::getGenderOptions(), array('empty' => '(Select a gender)')); ?>
        <?php echo $form->error($model, 'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'placeofbirth'); ?>
        <?php echo $form->dropDownList($model, 'placeofbirth', GeneralUtils::getCountriesOfOrigin(), array('empty' => '(Select a country of origin)')); ?>
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
        <?php echo $form->labelEx($model, 'height'); ?>
        <?php echo $form->textField($model, 'height'); ?>
        <?php echo $form->error($model, 'height'); ?>
    </div>
    
     <div class="row">
        <?php echo $form->labelEx($model, 'weight'); ?>
        <?php echo $form->textField($model, 'weight'); ?>
        <?php echo $form->error($model, 'weight'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'participationform'); ?>
          <?php echo $form->dropDownList($model, 'participationform', GeneralUtils::enumItem($model, 'participationform')); ?>
        <?php echo $form->error($model, 'participationform'); ?>
    </div>
    
     <div class="row">
        <?php echo $form->labelEx($model, 'verification'); ?>
        <?php echo $form->textField($model, 'verification'); ?>
        <?php echo $form->error($model, 'verification'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'dateofsignedform'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model, // Model object
            'attribute' => 'dateofsignedform', // Attribute name
            'options' => array(
                'showAnim' => 'fold',
            ), // jquery plugin options
            'htmlOptions' => array('style' => 'height:20px;') // HTML options
        ));
        ?> 
        <?php echo $form->error($model, 'dateofsignedform'); ?>
    </div>
    <hr/>
    <h4>Eligibility</h4>
     <div class="row">
        <?php echo $form->labelEx($model, 'crfform'); ?>
          <?php echo $form->dropDownList($model, 'crfform', GeneralUtils::enumItem($model, 'crfform')); ?>
        <?php echo $form->error($model, 'crfform'); ?>
    </div>
    
      <div class="row">
        <?php echo $form->labelEx($model, 'crfaffirmation'); ?>
        <?php echo $form->textField($model, 'crfaffirmation'); ?>
        <?php echo $form->error($model, 'crfaffirmation'); ?>
    </div>
       <div class="row">
        <?php echo $form->labelEx($model, 'excludeform'); ?>
          <?php echo $form->dropDownList($model, 'excludeform', GeneralUtils::enumItem($model, 'excludeform')); ?>
        <?php echo $form->error($model, 'excludeform'); ?>
    </div>
    
      <div class="row">
        <?php echo $form->labelEx($model, 'excludeaffirmation'); ?>
        <?php echo $form->textField($model, 'excludeaffirmation'); ?>
        <?php echo $form->error($model, 'excludeaffirmation'); ?>
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
                'changeYear'=>'true',
                'yearRange'=> '1900:2020',
                
            ), // jquery plugin options
            'htmlOptions' => array('style' => 'height:20px;') // HTML options
        ));
        ?> 
        <?php echo $form->error($model, 'establishedat'); ?>
    </div>

        
    <div class="row">
        <?php echo $form->labelEx($model, 'establishedat2'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model, // Model object
            'attribute' => 'establishedat2', // Attribute name
            'options' => array(
                'showAnim' => 'fold',
                'changeYear'=>'true',
                'yearRange'=> '1900:2020',
                
            ), // jquery plugin options
            'htmlOptions' => array('style' => 'height:20px;') // HTML options
        ));
        ?> 
        <?php echo $form->error($model, 'establishedat2'); ?>
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
    
      <div class="row buttons">
        <?php echo CHtml::submitButton('Save'); ?>
    </div>
    
    <h2>Ophthalmology Anamnesis</h2>
    <p>Please indicate the year it was noticed for the first time</p>
    <hr/>
    
     <div class="row">
        <?php echo $form->labelEx($model, 'nightblindnessage'); ?>
        <?php echo $form->textField($model, 'nightblindnessage'); ?> years
        <?php echo $form->error($model, 'nightblindnessage'); ?>
    </div>
     <!-- restriction of visual field -->
     <div class="row">
        <?php echo $form->labelEx($model, 'sidevisionage'); ?>
        <?php echo $form->textField($model, 'sidevisionage'); ?> years
        <?php echo $form->error($model, 'sidevisionage'); ?>
    </div>
     <!-- decreased visual acuity -->
    <div class="row">
        <?php echo $form->labelEx($model, 'decreasedvisualacage'); ?>
        <?php echo $form->textField($model, 'decreasedvisualacage'); ?> years
        <?php echo $form->error($model, 'decreasedvisualacage'); ?>
    </div>
      <!-- photophobia -->
    <div class="row">
        <?php echo $form->labelEx($model, 'sensibilitytolightage'); ?>
        <?php echo $form->textField($model, 'sensibilitytolightage'); ?> years
        <?php echo $form->error($model, 'sensibilitytolightage'); ?>
    </div>
      <!-- color vision problems -->
    <div class="row">
        <?php echo $form->labelEx($model, 'colourvisionage'); ?>
        <?php echo $form->textField($model, 'colourvisionage'); ?> years
        <?php echo $form->error($model, 'colourvisionage'); ?>
    </div>
      
        <!-- nystagmus -->
    <div class="row">
        <?php echo $form->labelEx($model, 'nystagmus'); ?>
        <?php echo $form->textField($model, 'nystagmus'); ?> years
        <?php echo $form->error($model, 'nystagmus'); ?>
    </div>
    
    
    <!-- scotome perception -->
    <div class="row">
        <?php echo $form->labelEx($model, 'scotome'); ?>
        <?php echo $form->textField($model, 'scotome'); ?> years
        <?php echo $form->error($model, 'scotome'); ?>
    </div>
    <!-- phosphenes perception -->
    <div class="row">
        <?php echo $form->labelEx($model, 'phosphenes'); ?>
        <?php echo $form->textField($model, 'phosphenes'); ?> years
        <?php echo $form->error($model, 'phosphenes'); ?>
    </div>
    
    <!--other comments -->
    <div class="row" >
        <?php echo $form->labelEx($model, 'othercomments'); ?>
        <?php echo $form->textArea($model, 'othercomments', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'othercomments'); ?>
    </div>
    
     <div class="row">
        <?php echo $form->labelEx($model, 'cataractod'); ?>
       <?php echo $form->dropDownList($model, 'cataractod', GeneralUtils::enumItem($model, 'cataractod')); ?>
        <?php echo $form->error($model, 'cataractod'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model, 'othersurgery'); ?>
        <?php echo $form->textField($model, 'othersurgery', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'othersurgery'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'surgerycomments'); ?>
        <?php echo $form->textArea($model, 'surgerycomments', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'surgerycomments'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'opthalmologytrauma'); ?>
        <?php echo $form->textField($model, 'opthalmologytrauma'); ?>
        <?php echo $form->error($model, 'opthalmologytrauma'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'opthalmologyinfection'); ?>
        <?php echo $form->textField($model, 'opthalmologyinfection'); ?>
        <?php echo $form->error($model, 'opthalmologyinfection'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'actualvisiualrehabilitation'); ?>
         <?php echo $form->dropDownList($model, 'actualvisiualrehabilitation', GeneralUtils::enumItem($model, 'actualvisiualrehabilitation')); ?>
        <?php echo $form->error($model, 'actualvisiualrehabilitation'); ?>
    </div>
    
    <h2>Otolaryngology  Anamnesis</h2>
    <hr/>

    <div class="row">
        <?php echo $form->labelEx($model, 'walkingage'); ?>
        <?php echo $form->textField($model, 'walkingage'); ?> months
        <?php echo $form->error($model, 'walkingage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'articulationage'); ?>
        <?php echo $form->textField($model, 'articulationage'); ?> months
        <?php echo $form->error($model, 'articulationage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hearingproblems'); ?>
        <?php echo $form->textField($model, 'hearingproblems'); ?> years
        <?php echo $form->error($model, 'hearingproblems'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hearingcharacter'); ?>
         <?php echo $form->dropDownList($model, 'hearingcharacter', GeneralUtils::enumItem($model, 'hearingcharacter')); ?>
        <?php echo $form->error($model, 'hearingcharacter'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hearingproblemslevel'); ?>
       <?php echo $form->dropDownList($model, 'hearingproblemslevel', GeneralUtils::enumItem($model, 'hearingproblemslevel')); ?>
        <?php echo $form->error($model, 'hearingproblemslevel'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'communcationmode'); ?>
        <?php echo $form->dropDownList($model, 'communcationmode', GeneralUtils::enumItem($model, 'communcationmode')); ?>
        <?php echo $form->error($model, 'communcationmode'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hearingdevicead'); ?>
           <?php echo $form->dropDownList($model, 'hearingdevicead', GeneralUtils::enumItem($model, 'hearingdevicead')); ?>
        <?php echo $form->error($model, 'hearingdevicead'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hearingdeviceas'); ?>
          <?php echo $form->dropDownList($model, 'hearingdeviceas', GeneralUtils::enumItem($model, 'hearingdeviceas')); ?>
        <?php echo $form->error($model, 'hearingdeviceas'); ?>
    </div>

    
  <div class="row buttons">
        <?php echo CHtml::submitButton('Save'); ?>
    </div>
    
    
    <hr/>
    <h3>Family Anamnesis</h3>
    <div class="row">
        <?php echo $form->labelEx($model, 'parentsorigin'); ?>
        <?php echo $form->textField($model, 'parentsorigin', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'parentsorigin'); ?>
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
    	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height'); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'participationform'); ?>
		<?php echo $form->textField($model,'participationform',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'participationform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verification'); ?>
		<?php echo $form->textArea($model,'verification',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'verification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateofsignedform'); ?>
		<?php echo $form->textField($model,'dateofsignedform'); ?>
		<?php echo $form->error($model,'dateofsignedform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actualsystemictreatment'); ?>
		<?php echo $form->textField($model,'actualsystemictreatment',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'actualsystemictreatment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actualvitamin'); ?>
		<?php echo $form->textField($model,'actualvitamin',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'actualvitamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surgeries'); ?>
		<?php echo $form->textField($model,'surgeries',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'surgeries'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'traumas'); ?>
		<?php echo $form->textField($model,'traumas',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'traumas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'systemicinfections'); ?>
		<?php echo $form->textField($model,'systemicinfections',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'systemicinfections'); ?>
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
 
</div><!-- form -->