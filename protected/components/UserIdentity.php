<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;
    
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        
        $user=Doctor::model()->find('LOWER(username)=?',array($this->username));
        
        if ($user===null){
            //no user found
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }else if ($user->password != $this->password)
        {
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
            
        }   
        else
        {
            //echo "hello";
            $this->_id=$user->id;
            $this->errorCode=self::ERROR_NONE;
        }
        
        
        
        /*$users = array('test' => 'test', 'admin' => 'admin',);
        
        
        if (!isset($users[$this->username])) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($users[$this->username] !== $this->password) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id=1;
            $this->errorCode = self::ERROR_NONE;
        }*/
        return !$this->errorCode;
    }

    function getId() {
        return $this->_id;
    }
    
    function getUsername()
    {
        return $this->username;
        
    }

}