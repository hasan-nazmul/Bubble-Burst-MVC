<?php

	class GameBoard extends Model{
		private $userFirstName;
		private $userLastName;
		private $userID;
		private $password;

		private $panelHead_1;
		private $stringPanel_1;

		private $panelHead_2;
		private $stringPanel_2;

		//Properties used by class to manage view content and database interactions
		private $pageID;
		private $db;
		private $sql;
		private $loginError;
		private $session;

		//Game Board constructor
		function __construct($PageID, $UserID, $DB, $session){
			$this->session = $session;
			parent::__construct($this->session->getLoggedIn());

			$this->userID = $UserID;
			$this->db = $DB;
			$this->pageID = $PageID;

			//get the LHS panel content
			$this->setPanelHead_1();
			$this->setPanelString_1();

			//get LHS panel content
			$this->setPanelHead_2();
			$this->setPanelString_2();
		}

		public function setPanelHead_1(){
			if($this->loggedin){
				$this->panelHead_1 = 'Bubble Burst [version: 1.0]';
			}else{
				$this->panelHead_1 = 'Error - restricted access!';
			}
		}

		public function setPanelString_1(){
			//if($this->loggedin){
				//$this->stringPanel_1 = file_get_contents('forms/form_game_board.html');
			//}else{
				//$this->stringPanel_1 = 'No content available.';
			//}
			switch ($this->pageID) {
					case 'process_login':
						$this->userID = $this->db->real_escape_string($_POST['username']);
						$this->password = $this->db->real_escape_string($_POST['password']);
						//call the login method
                        //if ($this->login()){ //passwords not encrypted
                        if ($this->loginEncryptPW()){ //passwords encrypted
                            $this->session->setLoggedin(TRUE);
                            $this->session->setUserAuthorisation(1);
                            $this->session->setUserID($this->userID);
                            //$this->stringPanel_1= file_get_contents('forms/form_game_board.html');
                            $this->stringPanel_1='Welcome, '.$this->userFirstName.', to Bubble Burst.';
                        }
                        else{
                            $this->session->setLoggedin(FALSE);  //user is not logged on
                            $this->session->setUserAuthorisation(0); //privileges set to none
                            $this->stringPanel_1='Login NOT Successful!</br>'.$this->loginError;
                        }
						break;
					case "logout":
                        $this->logout();
                        $this->stringPanel_1 ='Logged out of your account successfully.<br>Please use the links above to register or login again.';
                        break;
					default:
						$this->stringPanel_1 = 'Login state unknown!';
						break;
				}
		}

		public function setPanelHead_2(){
			if($this->loggedin){
				$panelHead_2 = 'Welcome to chat';
			}else{
				$panelHead_2 = 'User not logged in';
			}
		}

		public function setPanelString_2(){
			if($this->loggedin){
				$stringPanel_2 = file_get_contents('forms/form_chat.html');
			}else{
				$stringPanel_2 = 'Chat currently OFFLINE!';
			}
		}

		private function logout(){
            $this->loggedin=FALSE;
            $this->session->setLoggedin(FALSE);  //user is not logged on
            $this->session->setUserAuthorisation(0); //privileges set to none            
        }
        private function loginEncryptPW(){
            //password is encrypted
            $this->password=hash('ripemd160', $this->password);
            
            //query the database
            $sql='SELECT  * FROM bubble_burst WHERE UserID="'.$this->userID.'" AND Password="'.$this->password.'"';
            $this->sql=$sql; //for diagnostic purposes
            
            //check if any rows returned from query
            if($rs=$this->db->query($sql)){  //execute the query and check it worked and returned data    
                if ($rs->num_rows<>1){  //username and password is not valid
                    $this->loginError= 'Login Fail - '.$rs->num_rows;
                    //free result set memory
                    $rs->free();
                    return FALSE;                    
                }
                else{                    
                $this->loginError= 'Login Successful - no error';
                $row=$rs->fetch_assoc();
                $this->userID=$row['UserID'];
                $this->userFirstName=$row['FirstName'];
                $this->userLastName=$row['LastName'];
                
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

        public function getPanelHead_1(){return $this->panelHead_1;}
        public function getPanelString_1(){return $this->stringPanel_1;}
        public function getPanelHead_2(){return $this->panelHead_2;}
        public function getPanelString_2(){return $this->stringPanel_2;}
        public function getUserID(){return $this->userID;}
        public function getSQL(){return $this->sql;}

	}

?>