<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddPatientForm
 *
 * @author Gerry
 */
class AddPatientForm extends CFormModel {
    //put your code here
    public $centeridA;
    public $centeridB;
    public $centeridC;
    
    public $internalcenteridA;
    public $internalcenteridB;
    public $internalcenteridC;
    
    public $drA;
    public $drB;
    public $drC;
    //generate systemid for patient
    public $systemid;
    
    public function rules()
	{
		return array(
			// username and password are required
			array('centeridA, drA', 'required'),
			// rememberMe needs to be a boolean
		);
	}
    
    public function attributeLabels()
	{
		return array(
		    'centeridA'=>'Center A (created patient)',
                    'centeridB'=>'Center B',
                    'centeridC'=>'Center C',
                    'internalcenteridA'=>'Internal Id of Center A',
                    'internalcenteridB'=>'Internal Id of Center B',
                    'internalcenteridC'=>'Internal Id of Center C',
                    'drA'=>'Responsible Physician Center A',
                    'drB'=>'Responsible Physician Center B',
                    'drC'=>'Responsible Physician Center C',
                        
		);
	}
    
}

?>
