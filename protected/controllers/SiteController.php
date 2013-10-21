<?php

class SiteController extends Controller {

    public $layout = '//layouts/column2';
    var $defaultAction = 'index';

    /**
     * Declares class-based actions.
     */
    public function accessRules() {
        array(
            'allow',
            'actions' => array('index'),
            'users' => array('@'),
        );
    }

    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        //    $dataProvider=new CActiveDataProvider('Patient');
        //	$this->render('index',array(
        //		'dataProvider'=>$dataProvider,
        //	));
        if (Yii::app()->user->isGuest) {

            $this->redirect(array('site/login'));
        } else {


            $_SESSION['range0'] = GeneralUtils::getRange(0, 100, 1);
            $_SESSION['range1'] = GeneralUtils::getRange(-20, 40, 1);

            $_SESSION['range4'] = GeneralUtils::getRange(0, 1, 0.1);

            $_SESSION['centralmaculathickness'] = GeneralUtils::getRange(0, 500, 1);



            $this->layout = '//layouts/column1';
            $this->render('index');
        }
    }

    public function actionForgotPassword() {
        $model = new ForgotPasswordForm;
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }


        // display the forgot password
        $this->render('forgotpassword', array('model' => $model));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    public function actionPatientStep1Update($id) {
        $model = new AddPatientForm;


        $criteria = new CDbCriteria();
        $criteria->compare('patientid', $id);

        $loadedCenters = Patientcenter::model()->findAll($criteria);

        $loadedCenter = $loadedCenters[0];
        //print_r($loadedCenter);

        if (isset($_POST['AddPatientForm'])) {
            $model->attributes = $_POST['AddPatientForm'];
            if ($model->validate()) {

                //centers
                $loadedCenter->centeridA = $model->centeridA;
                $loadedCenter->centeridB = $model->centeridB;
                $loadedCenter->centeridC = $model->centeridC;

                //doctors
                $loadedCenter->doctoridA = $model->drA;
                $loadedCenter->doctoridB = $model->drB;
                $loadedCenter->doctoridC = $model->drC;


                $loadedCenter->patientid = $id;


                $loadedCenter->save();
                //print_r($newcenter->getErrors());



                $this->redirect(array('/patient/view', 'id' => $id));
            }
        }

        $model->centeridA = $loadedCenter->centeridA;
        $model->centeridB = $loadedCenter->centeridB;
        $model->centeridC = $loadedCenter->centeridC;

        $model->drA = $loadedCenter->doctoridA;
        $model->drB = $loadedCenter->doctoridB;
        $model->drC = $loadedCenter->doctoridC;

        $this->render('updatepatientstep1', array('model' => $model, 'patientid' => $id));
    }

    public function actionPatientStep1() {
        $model = new AddPatientForm;
        if (isset($_POST['AddPatientForm'])) {
            $model->attributes = $_POST['AddPatientForm'];
            if ($model->validate()) {
                $newpatient = new Patient;

                //need country of origin
                $newpatient->systemid = uniqid('PATIENT');
                $newpatient->save();
                $newcenter = new Patientcenter;
                //centers
                $newcenter->centeridA = $model->centeridA;
                $newcenter->centeridB = $model->centeridB;
                $newcenter->centeridC = $model->centeridC;

                //doctors
                $newcenter->doctoridA = $model->drA;
                $newcenter->doctoridB = $model->drB;
                $newcenter->doctoridC = $model->drC;

                $newcenter->patient = $newpatient;
                $newcenter->patientid = $newpatient->id;


                $newcenter->save();
                //print_r($newcenter->getErrors());
                //add patient to recently added patients, to be viewed in step2
                //$session[$newpatient->systemid] = $newpatient->id;

                $this->redirect(array('/patient/patientStep2', 'id' => $newpatient->id));
            }
        }
        //render the form model
        $this->render('patientstep1', array('model' => $model));
    }

    public function actionStatistics() {
        //display a view containing all of the search pages under each other as partials

        $model = new StatisticsForm;

        $this->render('/site/statistics',array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {

        $this->layout = '//layouts/column1';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->homeUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {

        Yii::app()->user->logout(true);
        $this->redirect(array('site/login'));
    }

}