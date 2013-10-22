<?php

class PatientController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update','createpdf'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'patientStep2', 'search', 'genetics', 'loadxmlfile'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('patientoverview', array(
            'model' => $this->loadModel($id),
        ));
    }

 
    
    
    public function actionLoadXmlFile() {
        $xml = simplexml_load_file("http://localhost:8080/gen/icd10/ICD10CM_FY2014_Full_XML_Tabular.xml");
        
        //$elem = new SimpleXMLElement($xml);
        //create a simple xpath
        $diags = $xml->xpath('//diag');
        
        //array of diagnoses
        print_r($diags);
       // print_r($xml);
       // $fields = $this->xmlToArray($xml);
        //print_r($fields);
        //echo $fields;
        //return $fields;
    }
    
    
    
    

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    //load the patient overview page, with the correct patient model
    public function actionPatientStep2($id) {
        //render the patientoverview view, with the patient details
        $this->render('patientoverview', array('model' => $this->loadModel($id)));
    }

    public function actionGenetics($id) {
        //display/update the genetic data form
        $patient = $this->loadModel($id)->with('patientgenetics');

        //this loads the patient genetic form
        $this->render('geneticform', array('model' => $patient));
    }

    public function actionCreate() {
        $model = new Patient;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Patient'])) {
            $model->attributes = $_POST['Patient'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Patient'])) {
            $model->attributes = $_POST['Patient'];
            if ($model->save())
                $this->redirect(array('update', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider(Patient::model()->with('patientcenters'));
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }
    
    public function actioncreatepdf($id)
    {
        $model = $this->loadModel($id);
         $mPDF1 = Yii::app()->ePdf->mpdf();
          $mPDF1->WriteHTML($this->render('printview', array('model'=>$model), true));
          $mPDF1->Output();
         
    }
    

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Patient('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Patient']))
            $model->attributes = $_GET['Patient'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionSearch() {
        $model = new Patient('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Patient']))
            $model->attributes = $_GET['Patient'];

        $this->render('search', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Patient the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Patient::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Patient $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'patient-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
