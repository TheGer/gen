<?php

class FamilyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','assignPatient','removePatient'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
                        'model2arr'=>$this->loadModel($id)->patient,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Family;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Family']))
		{
			$model->attributes=$_POST['Family'];
                        //generate a unique system id with the term FAMILY at the beginning
                        $model->systemid = uniqid('FAMILY'.$model->systemid);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
       
        
        
        public function actionAssignPatient($id)
        {
            //bring up a list of patients, select a patient id, add it to the patientfamily table
            
            if(isset($_POST['patientid']))
            {
                
                $model= $this->loadModel($id);
                
                $patientid=$_POST['patientid'];
                
                $q="INSERT INTO patientfamily(patientid,familyid) VALUES({$patientid},{$id})";
                
                $cmd = Yii::app()->db->createCommand($q);
                $cmd->execute();
                
                
                $this->redirect(array('view','id'=>$model->id));
            }
            
           $this->render('addpatientview',array(
			'model'=>$this->loadModel($id),
                       'model2arr'=>Patient::model()->findAll(),
		));
            
        }
        
        
        public function actionRemovePatient($id)
        {
                $model= $this->loadModel($id);
                
                $patientid=$_POST['patientid'];
                
                $q="DELETE FROM patientfamily WHERE patientid = {$patientid}";
                
                $cmd = Yii::app()->db->createCommand($q);
                $cmd->execute();
                
                
                $this->redirect(array('view','id'=>$model->id));
         
            
        }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Family']))
		{
			$model->attributes=$_POST['Family'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Family');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Family('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Family']))
			$model->attributes=$_GET['Family'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Family the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Family::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Family $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='family-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
