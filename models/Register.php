<?php

	/**
	* 
	*/
	class Register extends Model
	{
		private $userName;
		private $userPassword;
		private $firstName;
		private $surName;

		private $panelHead_1;
		private $stringPanel_1;

		private $panelHead_2;
		private $stringPanel_2;

        //Error handling
        private $errorHead;
        private $error_message;
        private $registrationSuccess;

		private $db;
		private $sql;
		private $session;
		private $pageID;
		
		function __construct($pageID, $userName, $db, $session)
		{
			$this->session = $session;
			$this->userName = $userName;
			$this->db = $db;
			$this->pageID = $pageID;

			$this->setPanelHead_1();
			$this->setStringPanel_1();
		}

		public function setPanelHead_1(){
			switch ($this->pageID) {
				case 'login':
					$this->panelHead_1 = '<h1>Login</h1>';
					break;
				case 'logout':
					$this->panelHead_1 = 'Logged Out';
					break;
				case 'process_registration':
					$this->panelHead_1 = $this->userName . ' has been registered';
					break;
				default:
					$this->panelHead_1 = '<h1>Login</h1>';
					break;
			}
		}

		public function setStringPanel_1(){
			switch ($this->pageID) {
				case 'process_registration':
					$this->firstName = $this->db->real_escape_string($_POST['firstName']);
					$this->surName = $this->db->real_escape_string($_POST['surName']);
					$this->userName = $this->db->real_escape_string($_POST['userID']);
					$passwordOne = $this->db->real_escape_string($_POST['userPassOne']);
					$passwordTwo = $this->db->real_escape_string($_POST['userPassTwo']);

                    if ($this->firstName == "" || $this->surName == "") {
                        $this->stringPanel_1 = '<input type="text" name="firstName" id="firstName" placeholder="First Name" class="red">';
                        $this->stringPanel_1 .= '<input type="text" name="surName" id="surName" placeholder="Surname" class="red">';
                        $this->stringPanel_1 .= '<input type="text" name="userID" id="userID" placeholder="Username" value="'.$this->userName.'">';
                        $this->stringPanel_1 .= '<input type="password" name="userPassOne" id="userPass" placeholder="Type Password">';
                        $this->stringPanel_1 .= '<input type="password" name="userPassTwo" id="userPass" placeholder="Re-type Password">';
                        $this->stringPanel_1 .= '<input type="submit" name="submitReg" id="submitReg" value="Register">';

                        $this->errorHead= 'Name must not be empty';
                        $this->error_message = 'Please enter your first name and last name!';
                        return true;
                    }

                    if ($this->userName == "") {
                        $this->stringPanel_1 = '<input type="text" name="firstName" id="firstName" placeholder="First Name" value="'.$this->firstName.'">';
                        $this->stringPanel_1 .= '<input type="text" name="surName" id="surName" placeholder="Surname" value="'.$this->surName.'">';
                        $this->stringPanel_1 .= '<input type="text" name="userID" id="userID" placeholder="Username" class="red">';
                        $this->stringPanel_1 .= '<input type="password" name="userPassOne" id="userPass" placeholder="Type Password">';
                        $this->stringPanel_1 .= '<input type="password" name="userPassTwo" id="userPass" placeholder="Re-type Password">';
                        $this->stringPanel_1 .= '<input type="submit" name="submitReg" id="submitReg" value="Register">';

                        $this->errorHead= 'Username empty!';
                        $this->error_message = 'Please enter your a username!';
                        return true;
                    }

                    /*if ($passwordOne == "" || $passwordTwo = "") {
                        $this->stringPanel_1 = '<input type="text" name="firstName" id="firstName" placeholder="First Name" value="'.$this->firstName.'">';
                        $this->stringPanel_1 .= '<input type="text" name="surName" id="surName" placeholder="Surname" value="'.$this->surName.'">';
                        $this->stringPanel_1 .= '<input type="text" name="userID" id="userID" placeholder="Username" value="'.$this->userName.'">';
                        $this->stringPanel_1 .= '<input type="password" name="userPassOne" id="userPass" placeholder="Type Password" class="red">';
                        $this->stringPanel_1 .= '<input type="password" name="userPassTwo" id="userPass" placeholder="Re-type Password" class="red">';
                        $this->stringPanel_1 .= '<input type="submit" name="submitReg" id="submitReg" value="Register">';

                        $this->errorHead= 'Invalid password!';
                        $this->error_message = 'Password fields must not be empty, please make sure both password fields have values.';
                        return true;
                    }*/
                    if (($passwordOne == $passwordTwo) && ($passwordOne != "" || $passwordTwo != "")) {
						$this->userPassword = $passwordOne;

						if($this->registerEncryptPW()){  //register with password encryption
                            $this->stringPanel_1 = '<div class="notification green"><p>Registration successful - please log in using the link above.</p></div>';
                            $this->registrationSuccess = true;
                        }else{//registration not successful
                            //$this->stringPanel_1 = file_get_contents('forms/form_register.php');
                            $this->stringPanel_1 = '<input type="text" name="firstName" id="firstName" placeholder="First Name" value="'.$this->firstName.'">';
                            $this->stringPanel_1 .= '<input type="text" name="surName" id="surName" placeholder="Surname" value="'.$this->surName.'">';
                            $this->stringPanel_1 .= '<input type="text" name="userID" id="userID" placeholder="Username" class="red" value="'.$this->userName.'" class="red">';
                            $this->stringPanel_1 .= '<input type="password" name="userPassOne" id="userPass" placeholder="Type Password">';
                            $this->stringPanel_1 .= '<input type="password" name="userPassTwo" id="userPass" placeholder="Re-type Password">';
                            $this->stringPanel_1 .= '<input type="submit" name="submitReg" id="submitReg" value="Register">';

                            $this->errorHead= 'Error!';
                            $this->error_message = 'Unable to complete registration Possible duplicate User ID';
                        }                      
                    }else{//passwords dont match  show the registration form again
                        //$this->stringPanel_1 = file_get_contents('forms/form_register.php');
                        $this->stringPanel_1 = '<input type="text" name="firstName" id="firstName" placeholder="First Name" value="'.$this->firstName.'">';
                        $this->stringPanel_1 .= '<input type="text" name="surName" id="surName" placeholder="Surname" value="'.$this->surName.'">';
                        $this->stringPanel_1 .= '<input type="text" name="userID" id="userID" placeholder="Username" value="'.$this->userName.'">';
                        $this->stringPanel_1 .= '<input type="password" name="userPassOne" id="userPass" placeholder="Type Password" class="red">';
                        $this->stringPanel_1 .= '<input type="password" name="userPassTwo" id="userPass" placeholder="Re-type Password" class="red">';
                        $this->stringPanel_1 .= '<input type="submit" name="submitReg" id="submitReg" value="Register">';

                        $this->errorHead = "Password did not match!";
                        $this->error_message = "Please check that you have entered the same password in both fields.";
                    }  
					break;
				case "process_login":
                    $this->userName=$this->db->real_escape_string($_POST['userID']);
                    $this->userPassword=$this->db->real_escape_string($_POST['password']);
                    
                    //call the login method
                    //if ($this->login()){ //passwords not encrypted
                    if ($this->loginEncryptPW()){ //passwords encrypted
                        $this->session->setLoggedin(TRUE);
                        $this->session->setUserAuthorisation(2);
                        $this->session->setUserID($this->lectID);
                        $this->stringPanel_1='Welcome, '.$this->firstName.', to Bubble Burst.';
                    }
                    else{
                        $this->session->setLoggedin(FALSE);  //user is not logged on
                        $this->session->setUserAuthorisation(0); //privileges set to none
                        $this->stringPanel_1='Login NOT Successful'.$this->loginError;
                    }

                    break; 
				default:
					$this->stringPanel_1 = file_get_contents('forms/form_register.html');
					break;
			}
		}

		private function loginEncryptPW(){
            //password is encrypted
            $this->userPassword=hash('ripemd160', $this->userPassword);
            
            //query the database
            $sql='SELECT  * FROM bubble_burst WHERE UserID="'.$this->userName.'" AND Password="'.$this->userPassword.'"';
            $this->sql=$sql; //for diagnostic purposes
            
            //check if any rows returned from query
            if($rs=$this->db->query($sql)){  //execute the query and check it worked and returned data    
                if ($rs->num_rows<>1){  //username and password is not valid
                    $this->error_message= 'Login Fail - '.$rs->num_rows;
                    //free result set memory
                    $rs->free();
                    return FALSE;                    
                }
                else{                    
                $this->error_message= 'Registration succesful!';
                $row=$rs->fetch_assoc();
                $this->userName=$row['UserID'];
                $this->firstName=$row['FirstName'];
                $this->surName=$row['LastName'];
                
                    $rs->free();
                    $this->loggedin=TRUE;
                    return TRUE;
                } 
            } 
            else{  //resultset is empty or something else went wrong with the query
                $this->loggedin=FALSE;
                return FALSE;
            }

            
        }

		private function registerEncryptPW(){
            /*encrypt the password
             * 
             * Note that ripemd160 encryption produces a 40 character string. 
             * This means that the password field in the table must be at least
             * VARCHAR(40)
             *   
             */
            $tempDate = date("Y/m/d");
            $this->userPassword=hash('ripemd160', $this->userPassword);

            //create the SQL insert statement for the new record
            $sql='INSERT INTO `bubble_burst`.`users`(`DateCreated`,`UserID`,`FirstName`,`LastName`,`Password`)VALUES("'.$tempDate.'","'.$this->userName.'","'.$this->firstName.'","'.$this->surName.'","'.$this->userPassword.'")';
            //execute the insert query
            if(@$this->db->query($sql)){  //execute the query and check it worked    
                return TRUE;
            } 
            else{  //insert query has not succeeded
                return FALSE;
            }                        
        }

         //public accessible getter functions
        public function getRegResult(){return $this->registrationSuccess;}
        public function getPanelHead_1(){return $this->panelHead_1;}
        public function getStringPanel_1(){return $this->stringPanel_1;}
        public function getErrorHead(){return $this->errorHead;}
        public function getErrorMessage(){return $this->error_message;}
        public function getUserID(){return $this->userID;}
        public function getSQL(){return $this->sql;}  
	}

?>