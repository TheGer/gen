<?php
/* @var $this DoctorModelController */
/* @var $model DoctorModel */

$this->breadcrumbs=array(
	'Register',
);

?>

<h1>Register</h1>

<?php echo $this->renderPartial('_registerform', array('model'=>$model)); ?>