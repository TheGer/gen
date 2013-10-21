<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchPatientForm
 *
 * @author Gerry
 */
class StatisticsForm extends CFormModel {
    //put your code here
    public $query;
    
    
    public function rules()
	{
		return array(
			// username and password are required
			array('query', 'required'),
			// rememberMe needs to be a boolean
		);
	}

    
    
}

?>
