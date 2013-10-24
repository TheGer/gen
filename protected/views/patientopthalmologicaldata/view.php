<?php
/* @var $this PatientopthalmologicaldataController */
/* @var $model Patientopthalmologicaldata */
$this->layout ='//layouts/column1';
$this->breadcrumbs=array(
	'Patients'=>array('/patient/index'),
	$model->patientid=>array('/patientopthalmologicaldata/indexofpatient','id'=>$model->patientid),
        $model->id=>array('/patientopthalmologicaldata/view','id'=>$model->id),
	'Phenotype data',
);

/*$this->menu=array(
	array('label'=>'List Patientopthalmologicaldata', 'url'=>array('index')),
	array('label'=>'Create Patientopthalmologicaldata', 'url'=>array('create')),
	array('label'=>'Update Patientopthalmologicaldata', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Patientopthalmologicaldata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientopthalmologicaldata', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>View Patient Phenotype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patientid',
		'examinationdate',
	),
)); ?>


<h1>Ophtalmology Part </h1>
<!-- for each eye test -->
<h3>Visual acuity tests</h3>
<hr/>
<table border="1">
<?php
if (!empty($model->opthalmologicalvisualacuitytests)) {
?>

    <tr>
 <?php
 $counter = 0;
 $eye='any';

 foreach ($model->opthalmologicalvisualacuitytests as $opthalmologicalvisualacuitytestmodel) {
     $counter++;
     $eye = $opthalmologicalvisualacuitytestmodel->eye;
        ?>
        <td valign='top'>
            <p><?php echo strtoupper($eye); ?></p>
            <?php $this->renderPartial('/opthalmologicalvisualacuitytest/_form', array('model' => $opthalmologicalvisualacuitytestmodel, 'action' => 'update'));?>
        </td>
 <?php }
 //only left eye filled
    if (($counter==1) && ($eye=='right')) {?><td valign='top'>
        
        <?php 
        echo strtoupper($eye);
    $opthalmologicalvisualacuitytestmodelleft = new Opthalmologicalvisualacuitytest;
    $opthalmologicalvisualacuitytestmodelleft->testid = $model->id;
    $opthalmologicalvisualacuitytestmodelleft->eye = 'left';
  
    $this->renderPartial('/opthalmologicalvisualacuitytest/_form', array('model' => $opthalmologicalvisualacuitytestmodelleft, 'action' => 'create')); ?> </td> 
        <?php }
   //only right eye filled
     if (($counter==1) && ($eye=='left')) {?><td valign='top'>
       
         <?php
         echo strtoupper($eye);
      $opthalmologicalvisualacuitytestmodelright = new Opthalmologicalvisualacuitytest;
       $opthalmologicalvisualacuitytestmodelright->testid = $model->id;
       $opthalmologicalvisualacuitytestmodelright->eye = 'right';
     $this->renderPartial('/opthalmologicalvisualacuitytest/_form', array('model' => $opthalmologicalvisualacuitytestmodelright, 'action' => 'create')); ?> </td><?php }
    ?>
    
    </tr>
   <?php    
   } else {
    $opthalmologicalvisualacuitytestmodelleft = new Opthalmologicalvisualacuitytest;
    $opthalmologicalvisualacuitytestmodelright = new Opthalmologicalvisualacuitytest;
    //link the file to the patient
    $opthalmologicalvisualacuitytestmodelleft->testid = $model->id;
   $opthalmologicalvisualacuitytestmodelleft->eye = 'left';
   $opthalmologicalvisualacuitytestmodelright->testid = $model->id;
    $opthalmologicalvisualacuitytestmodelright->eye = 'right';
    ?>
    <td valign='top'>
   RIGHT
    <?php $this->renderPartial('/opthalmologicalvisualacuitytest/_form', array('model' => $opthalmologicalvisualacuitytestmodelright, 'action' => 'create')); ?>
    </td>
    <td valign='top'>
    LEFT
    <?php $this->renderPartial('/opthalmologicalvisualacuitytest/_form', array('model' => $opthalmologicalvisualacuitytestmodelleft, 'action' => 'create')); ?>    
    </td>
    <?php
}
?>
</table>
<hr/>
<!--------------------------------------------- END TEST TEN ---------------------------------------------------->
<h3>Visual field tests</h3>
<hr/>
<table border="1">
<?php
if (!empty($model->opthalmologicalvisualfieldtests)) {
?>

    <tr>
 <?php
 $counter = 0;
 $eye='any';
 foreach ($model->opthalmologicalvisualfieldtests as $opthalmologicalvisualfieldtestmodel) {
     $counter++;
     $eye = $opthalmologicalvisualfieldtestmodel->eye;
        ?>
        <td valign='top'>
            <p><?php echo strtoupper($eye); ?></p>
            <?php $this->renderPartial('/opthalmologicalvisualfieldtest/_form', array('model' => $opthalmologicalvisualfieldtestmodel, 'action' => 'update'));?>
        </td>
 <?php }
 //only left eye filled
 
    if (($counter==1) && ($eye=='right')) {?><td valign='top'>
     LEFT
        <?php 
    $opthalmologicalvisualfieldtestmodelleft = new Opthalmologicalvisualfieldtest;
    $opthalmologicalvisualfieldtestmodelleft->examid = $model->id;
    $opthalmologicalvisualfieldtestmodelleft->eye = 'left';
    $this->renderPartial('/opthalmologicalvisualfieldtest/_form', array('model' => $opthalmologicalvisualfieldtestmodelleft, 'action' => 'create')); ?> </td> 
        <?php }
   //only right eye filled
     if (($counter==1) && ($eye=='left')) {?><td valign='top'>
        RIGHT
         <?php
      $opthalmologicalvisualfieldtestmodelright = new Opthalmologicalvisualfieldtest;
       $opthalmologicalvisualfieldtestmodelright->examid = $model->id;
       $opthalmologicalvisualfieldtestmodelright->eye = 'right';
     $this->renderPartial('/opthalmologicalvisualfieldtest/_form', array('model' => $opthalmologicalvisualfieldtestmodelright, 'action' => 'create')); ?> </td><?php }
    ?>
    
    </tr>
   <?php    
   } else {
    $opthalmologicalvisualfieldtestmodelleft = new Opthalmologicalvisualfieldtest;
    $opthalmologicalvisualfieldtestmodelright = new Opthalmologicalvisualfieldtest;
    //link the file to the patient
    $opthalmologicalvisualfieldtestmodelleft->examid = $model->id;
   $opthalmologicalvisualfieldtestmodelleft->eye = 'left';
   $opthalmologicalvisualfieldtestmodelright->examid = $model->id;
    $opthalmologicalvisualfieldtestmodelright->eye = 'right';
    ?>
    <td valign='top'>
   RIGHT
    <?php $this->renderPartial('/opthalmologicalvisualfieldtest/_form', array('model' => $opthalmologicalvisualfieldtestmodelright, 'action' => 'create')); ?>
    </td>
    <td valign='top'>
   LEFT
    <?php $this->renderPartial('/opthalmologicalvisualfieldtest/_form', array('model' => $opthalmologicalvisualfieldtestmodelleft, 'action' => 'create')); ?>    
    </td>
    <?php
}
?>
</table>
<hr/>
<!--------------------------------------------- END TEST ELEVEN ---------------------------------------------------->
<h3>Electroretinogram tests</h3>
<hr/>
<table border="1">
<?php
if (!empty($model->opthalmologicalergtests)) {
?>

    <tr>
 <?php
 $counter = 0;
 $eye='any';
 foreach ($model->opthalmologicalergtests as $ergmodel) {
     $counter++;
     $eye = $ergmodel->eye;
        ?>
        <td valign='top'>
            <p><?php echo strtoupper($eye); ?></p>
            <?php $this->renderPartial('/opthalmologicalergtest/_form', array('model' => $ergmodel, 'action' => 'update'));?>
        </td>
 <?php }
 //only left eye filled
    if (($counter==1) && ($eye=='left')) {?><td valign='top'>
      <?php echo strtoupper($eye); ?>
        <?php 
    $ergmodelright = new Opthalmologicalergtest;
    $ergmodelright->examid = $model->id;
    $ergmodelright->eye = 'right';
    $this->renderPartial('/opthalmologicalergtest/_form', array('model' => $ergmodelright, 'action' => 'create')); ?> </td> 
        <?php }
   //only right eye filled
     if (($counter==1) && ($eye=='right')) {?><td valign='top'>
      <?php echo strtoupper($eye); ?>
         <?php
      $ergmodelleft = new Opthalmologicalergtest;
       $ergmodelleft->examid = $model->id;
       $ergmodelleft->eye = 'left';
     $this->renderPartial('/opthalmologicalergtest/_form', array('model' => $ergmodelleft, 'action' => 'create')); ?> </td><?php }
    ?>
    
    </tr>
   <?php    
   } else {
    $ergmodelleft = new Opthalmologicalergtest;
    $ergmodelright = new Opthalmologicalergtest;
    //link the file to the patient
    $ergmodelleft->examid = $model->id;
    $ergmodelleft->eye = 'left';
    $ergmodelright->examid = $model->id;
    $ergmodelright->eye = 'right';
    ?>
    <td valign='top'>
RIGHT
    <?php $this->renderPartial('/opthalmologicalergtest/_form', array('model' => $ergmodelleft, 'action' => 'create')); ?>
    </td>
    <td valign='top'>
   LEFT
    <?php $this->renderPartial('/opthalmologicalergtest/_form', array('model' => $ergmodelright, 'action' => 'create')); ?>    
    </td>
    <?php
}
?>
</table>
<hr/>
<!--------------------------------------------- END TEST TWO ---------------------------------------------------->
<h3>Multifocal Electroretinogram tests</h3>
<hr/>
<table border="1">
<?php
if (!empty($model->opthalmologicalmfergtests)) {
?>

    <tr>
 <?php
 $counter = 0;
 $eye='any';
 foreach ($model->opthalmologicalmfergtests as $mfergtestmodel) {
     $counter++;
     $eye = $mfergtestmodel->eye;
        ?>
        <td valign='top'>
            <p><?php echo strtoupper($eye); ?></p>
            <?php $this->renderPartial('/opthalmologicalmfergtest/_form', array('model' => $mfergtestmodel, 'action' => 'update'));?>
        </td>
 <?php }
 //only left eye filled
    if (($counter==1) && ($eye=='left')) {?><td valign='top'>
     RIGHT
        <?php 
    $mfergtestmodelright = new Opthalmologicalmfergtest;
    $mfergtestmodelright->examid = $model->id;
    $mfergtestmodelright->eye = 'right';
    $this->renderPartial('/opthalmologicalmfergtest/_form', array('model' => $mfergtestmodelright, 'action' => 'create')); ?> </td> 
        <?php }
   //only right eye filled
     if (($counter==1) && ($eye=='right')) {?><td valign='top'>
      LEFT
         <?php
      $mfergtestmodelleft = new Opthalmologicalmfergtest;
       $mfergtestmodelleft->examid = $model->id;
       $mfergtestmodelleft->eye = 'left';
     $this->renderPartial('/opthalmologicalmfergtest/_form', array('model' => $mfergtestmodelleft, 'action' => 'create')); ?> </td><?php }
    ?>
    
    </tr>
   <?php    
   } else {
    $mfergtestmodelleft = new Opthalmologicalmfergtest;
    $mfergtestmodelright = new Opthalmologicalmfergtest;
    //link the file to the patient
    $mfergtestmodelleft->examid = $model->id;
    $mfergtestmodelleft->eye = 'left';
    $mfergtestmodelright->examid = $model->id;
    $mfergtestmodelright->eye = 'right';
    ?>
    <td valign='top'>
RIGHT
    <?php $this->renderPartial('/opthalmologicalmfergtest/_form', array('model' => $mfergtestmodelright, 'action' => 'create')); ?>
    </td>
    <td valign='top'>
LEFT
    <?php $this->renderPartial('/opthalmologicalmfergtest/_form', array('model' => $mfergtestmodelleft, 'action' => 'create')); ?>    
    </td>
    <?php
}
?>
</table>
<hr/>
<!--------------------------------------------- END TEST FIVE ---------------------------------------------------->
<h3>Fundus photography tests</h3>
<hr/>
<table border="1">
<?php
if (!empty($model->opthfundusphotographytests)) {
?>

    <tr>
 <?php
 $counter = 0;
 $eye='any';
 foreach ($model->opthfundusphotographytests as $opthfundusphotographytestmodel) {
     $counter++;
     $eye = $opthfundusphotographytestmodel->eye;
        ?>
        <td valign='top'>
            <p><?php echo strtoupper($eye); ?></p>
            <?php $this->renderPartial('/opthfundusphotographytest/_form', array('model' => $opthfundusphotographytestmodel, 'action' => 'update'));?>
        </td>
 <?php }
 //only left eye filled
    if (($counter==1) && ($eye=='left')) {?><td valign='top'>
      <?php echo strtoupper($eye); ?>
        <?php 
    $opthfundusphotographytestmodelright = new Opthfundusphotographytest;
    $opthfundusphotographytestmodelright->examid = $model->id;
    $opthfundusphotographytestmodelright->eye = 'right';
    $this->renderPartial('/$opthfundusphotographytest/_form', array('model' => $$opthfundusphotographytestmodelright, 'action' => 'create')); ?> </td> 
        <?php }
   //only right eye filled
     if (($counter==1) && ($eye=='right')) {?><td valign='top'>
        <?php echo strtoupper($eye); ?>
         <?php
      $opthfundusphotographytestmodelleft = new Opthfundusphotographytest;
       $opthfundusphotographytestmodelleft->examid = $model->id;
       $opthfundusphotographytestmodelleft->eye = 'left';
     $this->renderPartial('/opthfundusphotographytest/_form', array('model' => $opthfundusphotographytestmodelleft, 'action' => 'create')); ?> </td><?php }
    ?>
    
    </tr>
   <?php    
   } else {
   $opthfundusphotographytestmodelleft = new Opthfundusphotographytest;
    $opthfundusphotographytestmodelright = new Opthfundusphotographytest;
    //link the file to the patient
   $opthfundusphotographytestmodelleft->examid = $model->id;
   $opthfundusphotographytestmodelleft->eye = 'left';
 $opthfundusphotographytestmodelright->examid = $model->id;
$opthfundusphotographytestmodelright->eye = 'right';
    ?>
    <td valign='top'>
RIGHT
    <?php $this->renderPartial('/opthfundusphotographytest/_form', array('model' => $opthfundusphotographytestmodelright, 'action' => 'create')); ?>
    </td>
    <td valign='top'>
LEFT
    <?php $this->renderPartial('/opthfundusphotographytest/_form', array('model' => $opthfundusphotographytestmodelleft, 'action' => 'create')); ?>    
    </td>
    <?php
}
?>
</table>
<hr/>
<!--------------------------------------------- END TEST TWELVE ---------------------------------------------------->
<h3>Fundus Autofluorescence test</h3>
<hr/>
<table border="1">
<?php
if (!empty($model->opthalmologicalfundusautofluortests)) {
?>

    <tr>
 <?php
 $counter = 0;
 $eye='any';
 foreach ($model->opthalmologicalfundusautofluortests as $autofluormodel) {
     $counter++;
     $eye = $autofluormodel->eye;
        ?>
        <td valign='top'>
            <p><?php echo strtoupper($eye); ?></p>
            <?php $this->renderPartial('/opthalmologicalautofluortest/_form', array('model' => $autofluormodel, 'action' => 'update'));?>
        </td>
 <?php }
 //only left eye filled
    if (($counter==1) && ($eye=='left')) {?><td valign='top'>
     <?php echo strtoupper($eye); ?>
        <?php 
    $autofluormodelright = new Opthalmologicalfundusautofluortest;
    $autofluormodelright->examid = $model->id;
    $autofluormodelright->eye = 'right';
    $this->renderPartial('/opthalmologicalautofluortest/_form', array('model' => $autofluormodelright, 'action' => 'create')); ?> </td> 
        <?php }
   //only right eye filled
     if (($counter==1) && ($eye=='right')) {?><td valign='top'>
      <?php echo strtoupper($eye); ?>
         <?php
      $autofluormodelleft = new Opthalmologicalfundusautofluortest;
       $autofluormodelleft->examid = $model->id;
       $autofluormodelleft->eye = 'left';
     $this->renderPartial('/opthalmologicalautofluortest/_form', array('model' => $autofluormodelleft, 'action' => 'create')); ?> </td><?php }
    ?>
    
    </tr>
   <?php    
   } else {
    $autofluormodelleft = new Opthalmologicalfundusautofluortest;
    $autofluormodelright = new Opthalmologicalfundusautofluortest;
    //link the file to the patient
    $autofluormodelleft->examid = $model->id;
    $autofluormodelleft->eye = 'left';
    $autofluormodelright->examid = $model->id;
    $autofluormodelright->eye = 'right';
    ?>
    <td valign='top'>
    RIGHT
    <?php $this->renderPartial('/opthalmologicalfundusautofluortest/_form', array('model' => $autofluormodelright, 'action' => 'create')); ?>
    </td>
    <td valign='top'>
LEFT
    <?php $this->renderPartial('/opthalmologicalfundusautofluortest/_form', array('model' => $autofluormodelleft, 'action' => 'create')); ?>    
    </td>
    <?php
}
?>
</table>
<hr/>
<!--------------------------------------------- END TEST FOUR ---------------------------------------------------->
<h3>Optical Coherence Tomography</h3>
<hr/>
<table border="1">
<?php
if (!empty($model->opthalmologicalocttests)) {
?>

    <tr>
 <?php
 $counter = 0;
 $eye='any';
 foreach ($model->opthalmologicalocttests as $opthalmologicalocttestmodel) {
     $counter++;
     $eye = $opthalmologicalocttestmodel->eye;
        ?>
        <td valign='top'>
            <p><?php echo strtoupper($eye); ?></p>
            <?php $this->renderPartial('/opthalmologicalocttest/_form', array('model' => $opthalmologicalocttestmodel, 'action' => 'update'));?>
        </td>
 <?php }
 //only left eye filled
    if (($counter==1) && ($eye=='left')) {?><td valign='top'>
        <?php echo strtoupper($eye); ?>
        <?php 
    $opthalmologicalocttestmodelright = new Opthalmologicalocttest;
    $opthalmologicalocttestmodelright->examid = $model->id;
    $opthalmologicalocttestmodelright->eye = 'right';
    $this->renderPartial('/opthalmologicalocttest/_form', array('model' => $opthalmologicalocttestmodelright, 'action' => 'create')); ?> </td> 
        <?php }
   //only right eye filled
     if (($counter==1) && ($eye=='right')) {?><td valign='top'>
       <?php echo strtoupper($eye); ?>
         <?php
      $opthalmologicalocttestmodelleft = new Opthalmologicalocttest;
       $opthalmologicalocttestmodelleft->examid = $model->id;
       $opthalmologicalocttestmodelleft->eye = 'left';
     $this->renderPartial('/opthalmologicalocttest/_form', array('model' => $opthalmologicalocttestmodelleft, 'action' => 'create')); ?> </td><?php }
    ?>
    
    </tr>
   <?php    
   } else {
    $opthalmologicalocttestmodelleft = new Opthalmologicalocttest;
    $opthalmologicalocttestmodelright = new Opthalmologicalocttest;
    //link the file to the patient
    $opthalmologicalocttestmodelleft->examid = $model->id;
   $opthalmologicalocttestmodelleft->eye = 'left';
   $opthalmologicalocttestmodelright->examid = $model->id;
    $opthalmologicalocttestmodelright->eye = 'right';
    ?>
    <td valign='top'>
    RIGHT
    <?php $this->renderPartial('/opthalmologicalocttest/_form', array('model' => $opthalmologicalocttestmodelright, 'action' => 'create')); ?>
    </td>
    <td valign='top'>
  LEFT
    <?php $this->renderPartial('/opthalmologicalocttest/_form', array('model' => $opthalmologicalocttestmodelleft, 'action' => 'create')); ?>    
    </td>
    <?php
}
?>
</table>
<hr/>
<!--------------------------------------------- END TEST EIGHT ---------------------------------------------------->
<h3>Otolaryngy Part</h3>
<hr/>
<table border="1">
<?php
if (!empty($model->opthalmologicaltonometrytests)) {
?>

    <tr>
 <?php
 $counter = 0;
 $eye='any';
 foreach ($model->opthalmologicaltonometrytests as $opthalmologicaltonometrytestmodel) {
     $counter++;
     $eye = $opthalmologicaltonometrytestmodel->eye;
        ?>
        <td valign='top'>
            <p><?php echo strtoupper($eye); ?></p>
            <?php $this->renderPartial('/opthalmologicaltonometrytest/_form', array('model' => $opthalmologicaltonometrytestmodel, 'action' => 'update'));?>
        </td>
 <?php }
 //only left eye filled
    if (($counter==1) && ($eye=='left')) {?><td valign='top'>
    <?php echo strtoupper($eye); ?> EAR
        <?php 
    $opthalmologicaltonometrytestmodelright = new Opthalmologicaltonometrytest;
    $opthalmologicaltonometrytestmodelright->testid = $model->id;
    $opthalmologicaltonometrytestmodelright->eye = 'right';
    $this->renderPartial('/opthalmologicaltonometrytest/_form', array('model' => $opthalmologicaltonometrytestmodelright, 'action' => 'create')); ?> </td> 
        <?php }
   //only right eye filled
     if (($counter==1) && ($eye=='right')) {?><td valign='top'>
       <?php echo strtoupper($eye); ?> EAR
         <?php
      $opthalmologicaltonometrytestmodelleft = new Opthalmologicaltonometrytest;
       $opthalmologicaltonometrytestmodelleft->testid = $model->id;
       $opthalmologicaltonometrytestmodelleft->eye = 'left';
     $this->renderPartial('/opthalmologicaltonometrytest/_form', array('model' => $opthalmologicaltonometrytestmodelleft, 'action' => 'create')); ?> </td><?php }
    ?>
    
    </tr>
   <?php    
   } else {
    $opthalmologicaltonometrytestmodelleft = new Opthalmologicaltonometrytest;
    $opthalmologicaltonometrytestmodelright = new Opthalmologicaltonometrytest;
    //link the file to the patient
    $opthalmologicaltonometrytestmodelleft->testid = $model->id;
   $opthalmologicaltonometrytestmodelleft->eye = 'left';
   $opthalmologicaltonometrytestmodelright->testid = $model->id;
    $opthalmologicaltonometrytestmodelright->eye = 'right';
    ?>
    <td valign='top'>
    RIGHT EAR 
    <?php $this->renderPartial('/opthalmologicaltonometrytest/_form', array('model' => $opthalmologicaltonometrytestmodelright, 'action' => 'create')); ?>
    </td>
    <td valign='top'>
   LEFT EAR
    <?php $this->renderPartial('/opthalmologicaltonometrytest/_form', array('model' => $opthalmologicaltonometrytestmodelleft, 'action' => 'create')); ?>    
    </td>
    <?php
}
?>
</table>
<hr/>
<!--------------------------------------------- END TEST NINE ---------------------------------------------------->

