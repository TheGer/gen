<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs = array(
    'Patients' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update Genetic Data',
);
/*
$this->menu = array(
    array('label' => 'List All Patients', 'url' => array('index')),
    array('label' => 'Search Patients', 'url' => array('search')),
    array('label' => 'Delete Patient', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Update Center Specific Data', 'url' => array('/site/patientStep1Update', 'id' => $model->id)),
    array('label' => 'Update General Patient Data', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Update Genetic Data', 'url' => array('genetics', 'id' => $model->id)),
    array('label' => 'Update Opthalmologic Data', 'url' => array('opthData', 'id' => $model->id)),
);
 * 
 */
?>



<h1>Update Patient Genetic Data <?php echo $model->id; ?></h1>
<h2>Create new genetic data</h2>
<!--list files here-->
<?php
if (!empty($model->patientgenetics)) {
    foreach ($model->patientgenetics as $genemodel) {
        $this->renderPartial('/patientgenetics/_form', array('model' => $genemodel, 'action' => 'update'));
    }
} else {
    ?>

    <?php
    $genemodel = new Patientgenetics;
    //link the file to the patient
    $genemodel->patientid = $model->id;
    $this->renderPartial('/patientgenetics/_form', array('model' => $genemodel, 'action' => 'create'));
}
?>
