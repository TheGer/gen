<?php

class OpthfundusautofluortestfileController extends Controller {

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
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'download'),
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
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Opthfundusautofluortestfile;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Opthfundusautofluortestfile'])) {
            $model->attributes = $_POST['Opthfundusautofluortestfile'];
            
             $createnew = $_POST['createnew'];
            $eye = $_POST['eye'];
            $examid = $_POST['examid'];
            if ($createnew == 1)
            {
                
                //create new opthergtest model and populate it with entries
                $temptest = new Opthalmologicalautofluortest;
                $temptest->eye = $eye;
                $temptest->performed = 'not applicable';
                $temptest->examid = $examid;
                $temptest->save();
               // print_r($temptest->getErrors());
                $model->testid = $temptest->id;
            }
            $model->filepath = CUploadedFile::getInstance($model, 'filepath');
            if ($model->save()) {
                mkdir(Yii::app()->basePath . '/files/fundusautofluortestfile/' . $model->id, 0, true);
                $model->filepath->saveAs(Yii::app()->basePath . '/files/fundusautofluortestfile/' . $model->id . '/' . $model->filepath->name);
                $this->redirect(array('patientopthalmologicaldata/view', 'id' => $model->test->testid));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionDownload($id) {

        $model = $this->loadModel($id);
        $file = Yii::app()->basePath . '/files/fundusautofluortestfile/' . $model->id . '/' . $model->filepath;


        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            exit;
        }
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

        if (isset($_POST['Opthfundusautofluortestfile'])) {
             $model->attributes = $_POST['Opthfundusautofluortestfile'];
            $upload = CUploadedFile::getInstance($model, 'filepath');
            if ($upload != null) {
                $model->filepath = CUploadedFile::getInstance($model, 'filepath');
            }
            if ($model->save())
                if ($upload != null) {
                    mkdir(Yii::app()->basePath . '/files/fundusautofluortestfile/' . $model->id, 0, true);
                    $model->filepath->saveAs(Yii::app()->basePath . '/files/fundusautofluortestfile/' . $model->id . '/' . $model->filepath->name);
                }
           $this->redirect(array('patientopthalmologicaldata/view', 'id' => $model->test->examid));
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
       $examid = $this->loadModel($id)->test->examid;
        $this->loadModel($id)->delete();
        if (file_exists(Yii::app()->basePath . '/files/fundusautofluortestfile/' . $id)) {
             $dir = Yii::app()->basePath . '/files/fundusautofluortestfile/' . $id;
            $files = array_diff(scandir($dir), array('.','..')); 
            foreach ($files as $file) { 
                 unlink("$dir/$file"); 
             } 
        }
        $this->redirect(array('patientopthalmologicaldata/view', 'id' => $examid));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Opthfundusautofluortestfile');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Opthfundusautofluortestfile('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Opthfundusautofluortestfile']))
            $model->attributes = $_GET['Opthfundusautofluortestfile'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Opthfundusautofluortestfile the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Opthfundusautofluortestfile::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Opthfundusautofluortestfile $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'opthfundusautofluortestfile-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
