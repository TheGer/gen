<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

?>


<h2 style="margin:auto;text-align:center">Eur-USH: European Research Projects on Rare Diseases driven by Young Investigators</h2>
<div class="loginformclass" >
  
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions'=>array(
        'class'=>'loginformclass',
    ),
)); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
  
</div><!-- form -->
  <div style="margin:auto;width:750px;text-align:justify">
    <h4 style="text-align:center">ERA-Net for Research Programmes on Rare Diseases</h4>
    <div>                                               
        <small>Principal investigators: Kerstin Nagel-Wolfrum, PhD,  Johannes Gutenberg University of Mainz , Institute of Zoology, Dept. Cell and Matrix Biology, Mainz, Germany (Coordination); Leal S�rgio Casimiro da Silva, AIBILI, 4C � Coimbra Coordinating Centre for Clinical Research, Coimbra, Portugal; Eduardo Jos� Gil Duarte Silva, MD PhD, IBILI-  Faculty of Medicine � University of Coimbra, Center for Hereditary Diseases and Visual Neurosciences Laboratory, Coimbra, Portugal; Ieva Sliesoraityte, MD PhD, INSERM CIC 503 H�pital des 15/20, Institut de la Vision, Paris, France; Christel Vach�, PhD, Montpellier, France; CHU, Laboratoire de g�n�tique mol�culaire, INSERM, Montpellier, France; Erwin van Wijk, PhD, Radboud University Nijmegen Medical Centre, Dept. Otorhinolaryngology, Nijmegen, The Netherlands</small>
    </div>
    </div>
