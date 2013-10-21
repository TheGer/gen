<?php

/**
 * ForgotPasswordForm class.
 */
class ForgotPasswordForm extends CFormModel
{
	public $username;
	public $email;


	private $_identity;

	public function rules()
	{
		return array(
			// username and password are required
			array('username, email', 'required'),
			
		);
	}

	public function resetpassword()
	{
		
		
	}
}
