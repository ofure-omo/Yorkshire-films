<?php

          
class User_validation {

    private $data;
    private $errors = [];
    private static $fields = ['firstname', 'surname', 'email', 'tel', 'DOB', 'username','password', 'password_confirm','lib_code'];
    
    
    
    public function __construct($post_data) {
        $this->data = $post_data; 
    }
    
    public function validateForm(){
      foreach(self::$fields as $field) {
        
     $this->validateFirstname();
     $this->validateSurname();
     $this->validateEmail();
     $this->validateTel();
     $this->validateDOB();
     $this->validateUsername();
     $this->validatePassword();
     $this->validatePasswordConfirm();
     $this->validateLibCode();
     return $this->errors;
    }
    }    

    
    private function validateFirstname() { //private functions to be run only within this class, then passed into function validateForm above
        
        $val = trim($this->data['firstname']);
        global $firstName;
        $firstName=filter_var($val, FILTER_SANITIZE_STRING);
        if(!preg_match('/^[a-zA-Z0-9]{1,20}$/', $firstName)){//regular expression
        $this->addError('firstname', 'firstname must be between 1 and 20 characters and alphanumeric.');
        }   else {
            echo "";
            }
        }
    
    
    private function validateSurname() {
       $val = trim($this->data['surname']);
       global $lastName;
       $lastName=filter_var($val, FILTER_SANITIZE_STRING);
        if(!preg_match('/^[a-zA-Z0-9]{1,20}$/', $lastName)){//regular expression
                $this->addError('surname', 'Surname must be between 1 and 20 characters and alphanumeric.');
        }   else {
            echo "";
            }
        } 
    
    private function validateEmail() {
      $val = trim($this->data['email']);
      global $email;
      $email= filter_var($val, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->addError('email', 'Email must be a valid email.');
        }   else {
            echo "";
            }
        }  
    
    private function validateTel() {
        $val = trim($this->data['tel']);
        global $telNo;
        $telNo= filter_var($val,FILTER_SANITIZE_NUMBER_INT);
        if(!preg_match('/^[0-9]{9,13}$/', $telNo)){//regular expression
                $this->addError('tel', 'Telephone must be between 9 and 13 characters and numeric.');
        }   else {
            echo "";
            }
        }  
    
    private function validateUsername() {
       $val = trim($this->data['username']);
       global $userName;
       $userName = filter_var($val, FILTER_SANITIZE_STRING);
        //insert code to check if username already exists in DB when connections learned
        if(!preg_match('/^[a-zA-Z0-9]{3,20}$/', $userName)){//regular expression
                $this->addError('username', 'Username must be between 3 and 20 characters and alphanumeric.');
        }   else {
            echo "";
            }
        }     
        
    private function validatePassword() {
        $val = ($this->data['password']);
        global $password;
        $password = filter_var($val, FILTER_SANITIZE_STRING);
        //hashing with sanitise this
         if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $password)){//regular expression
                $this->addError('password', 'Username must be between 6 and 12 characters and alphanumeric.');
        }   else {
            echo "";
            }
        }
    
    private function validateDOB() {
        global $dob;
        $dob= filter_var($this->data['DOB'], FILTER_SANITIZE_STRING);
    }    
    
    private function validatePasswordConfirm() {
       $val = ($this->data['password_confirm']);
       $val2 =  ($this->data['password']);
       //hashing with sanitise this
        if ($val ==$val2) {
            echo "";
        }   else {    
            $this->addError('password_confirm', 'Your passwords do not match, please try again.'); 
    }
    }
        
        public function validateLibCode() {
            $val = ($this->data['lib_code']);
            global $libCode;
            $libCode = filter_var($val, FILTER_SANITIZE_STRING);
            if (empty($val)){
                $userTypeMember = $libCode;
                $userTypeMember = "Member";
                return $userTypeMember;

            } else if($libCode== "eyup"){
                $userTypeAdmin = $libCode;
                $userTypeAdmin = "Admin";
                return $userTypeAdmin;

            } else if 
            ($libCode= "eebygum") {
                $userTypeLibrarian = $libCode; 
                $userTypeLibrarian = "Librarian";
                return $userTypeLibrarian;
            
        } else { //add if empty code to prevent error message
        $this->addError('lib_code', 'That code is incorrect, please try again or contact an administrator');
        }
    }
    
    private function addError($key, $val) { //This is an associative array that stores the errors that are generated by the individual 
        $this->errors[$key] = $val;         //functions for each field as above. $key is data name eg 'password, $val is error message
                                            //to be displayed.
    }
}
