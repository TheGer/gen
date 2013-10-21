<?php
/* @var $this OpthalmologicalvisualacuitytestController */
/* @var $model Opthalmologicalvisualacuitytest */
/* @var $form CActiveForm */
$url = '/opthalmologicalvisualacuitytest/' . $action . '/' . $model->id;
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'opthalmologicalvisualacuitytest-form' . $model->eye,
        'action' => Yii::app()->createUrl($url),
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php
    echo $form->errorSummary($model);
    echo $form->hiddenField($model, 'testid');
    echo $form->hiddenField($model, 'eye');
    ?>

 
  


    <div class="row">
        <?php echo $form->labelEx($model, 'type'); ?>
<?php echo $form->dropDownList($model, 'type', GeneralUtils::enumItem($model, 'type')); ?>
<?php echo $form->error($model, 'type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'notperformedcomment'); ?>
<?php echo $form->textArea($model, 'notperformedcomment', array('rows' => 6, 'cols' => 50)); ?>
<?php echo $form->error($model, 'notperformedcomment'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'etdrsnumberofletters'); ?>
<?php echo $form->textField($model, 'etdrsnumberofletters'); ?>
<?php echo $form->error($model, 'etdrsnumberofletters'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'learesult'); ?>
<?php echo $form->textField($model, 'learesult', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'learesult'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'fingercount'); ?>
<?php echo $form->dropDownList($model, 'fingercount', GeneralUtils::enumItem($model, 'fingercount')); ?>
<?php echo $form->error($model, 'fingercount'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'handmovement'); ?>
<?php echo $form->dropDownList($model, 'handmovement', GeneralUtils::enumItem($model, 'handmovement')); ?>
<?php echo $form->error($model, 'handmovement'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'lightperception'); ?>
<?php echo $form->dropDownList($model, 'lightperception', GeneralUtils::enumItem($model, 'lightperception')); ?>
<?php echo $form->error($model, 'lightperception'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'refractiontype'); ?>
<?php echo $form->dropDownList($model, 'refractiontype', GeneralUtils::enumItem($model, 'refractiontype')); ?>
<?php echo $form->error($model, 'refractiontype'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'refractionshere'); ?>
<?php echo $form->dropDownList($model, 'refractionshere', GeneralUtils::getRange(-20, 20, 0.25)); ?>
<?php echo $form->error($model, 'refractionshere'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'refractioncylindre'); ?>
<?php echo $form->dropDownList($model, 'refractioncylindre', GeneralUtils::getRange(-20, 20, 0.25)); ?>
<?php echo $form->error($model, 'refractioncylindre'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'refractionaxis'); ?>
<?php echo $form->dropDownList($model, 'refractionaxis', GeneralUtils::getRange(0, 360, 1)); ?>
<?php echo $form->error($model, 'refractionaxis'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'ioptype'); ?>
<?php echo $form->dropDownList($model, 'ioptype', GeneralUtils::enumItem($model, 'ioptype')); ?>
<?php echo $form->error($model, 'ioptype'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'iop'); ?>
<?php echo $form->textField($model, 'iop'); ?>
<?php echo $form->error($model, 'iop'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->