<?php
	/**
 * Description of Session
 *
 * @author Nazmul Hasan K00217982
 */
	class Settings extends Model
	{
		//Panel heads
		private $panelHead_1;
		private $panelHead_2;

		//Left and right side content
		private $fullName;
		private $description;
		private $memberSince;
		private $gamesPlayed;
		private $gamesWon;

		//config
		private $userID;
		private $db;
		private $pageID;

		//Update settings
		private $passwordMatch;
		private $hasDeleted;

		//error message
		private $error_message;
		
		function __construct($PageID, $UserID, $DB, $session)
		{
			$this->session = $session;
			parent::__construct($this->session->getLoggedIn());

			$this->userID = $UserID;
			$this->db = $DB;
			$this->pageID = $PageID;

			$this->passwordMatch = false;

			$this->setPanelHead_1();
			$this->setPanelHead_2();
			$this->setAccountInfo();
		}


		public function setPanelHead_1(){
			if ($this->loggedin) {
				$this->panelHead_1 = 'Account Info';
			}
		}

		public function setPanelHead_2(){
			if ($this->loggedin) {
				$this->panelHead_2 = 'Account Settings';
			}
		}


		//Smart sql query by passing, column, table, where to look, and what to look for
		private function getSqlResultOne($column, $table, $lookInto, $lookValue){
			$temp = "";
			$sql='SELECT '.$column.' FROM '.$table.' WHERE '.$lookInto.'="'.$lookValue.'"';
			if ($result=$this->db->query($sql)) {
				$row=$result->fetch_assoc();
				if ($result->num_rows>0) {
					$temp = $row[$column];
				}else{
					$temp = "NO RESULT FOUND!";
				}
			}else{
				$temp = "Query for Column: " .$column. ", Table: " .$table. ", WHERE " .$lookInto. ", value: " .$lookValue. " was unsuccessful!";
			}
			return $temp;
		}

		private function saveSettingsEncryptPW($aboutMe, $password, $UserID){
            /*encrypt the password
             * 
             * Note that ripemd160 encryption produces a 40 character string. 
             * This means that the password field in the table must be at least
             * VARCHAR(40)
             *   
             */
            
            $userPassword=hash('ripemd160', $password);

            //create the SQL insert statement for the new record
            $sql='UPDATE `users` SET `Description`="'.$aboutMe.'",`Password`="'.$userPassword.'" WHERE UserID = "'.$UserID.'"';
            //execute the insert query
            if(@$this->db->query($sql)){  //execute the query and check it worked    
                return TRUE;
            } 
            else{  //update query has not succeeded
                return FALSE;
            }                        
        }

		private function getSqlSettings($UserID){
			if ($this->loggedin) {
				$sql='SELECT users.FirstName as fName, users.LastName as sName, users.DateCreated as DateJoined, users.Description as Description, COUNT(result.GameID) as GamesPlayed, MAX(result.Points) as Points, result.Win as Wins FROM result INNER JOIN users ON users.UserID=result.UserID WHERE users.UserID = "'.$UserID.'" GROUP BY result.UserID ORDER BY MAX(result.Points) DESC';
				if ($result=$this->db->query($sql)) {
					$row=$result->fetch_assoc();
					if ($result->num_rows>0) {
						$this->fullName = $row["fName"]. " " .$row["sName"];
						$this->description = $row["Description"];
						$this->memberSince = $row["DateJoined"];
						$this->gamesPlayed = $row['GamesPlayed'];
						$this->gamesWon = $row['Wins'];
					}else{
						$this->error_message = "NO RESULT FOUND!"; //For debug
					}
				}else{
					$this->error_message = "Query was not successful!"; //For debug
				}
			}
		}

		private function deleteAccount($UserID){
			if ($this->loggedin) {
				$sql = 'DELETE FROM `users` WHERE UserID = "'.$UserID.'" ';
				if(@$this->db->query($sql)){  //execute the query and check it worked    
	                return TRUE;
	            } 
	            else{  //update query has not succeeded
	                return FALSE;
	            }
			}
		}

		private function logout(){
            $this->loggedin=FALSE;
            $this->session->setLoggedin(FALSE);  //user is not logged on
            $this->session->setUserAuthorisation(0); //privileges set to none            
        }

		public function setAccountInfo(){
			if ($this->loggedin) {
				switch ($this->pageID) {
					case 'my_account':
						$loggedInUser = $this->session->getUserID();
						$this->getSqlSettings($loggedInUser);
						break;
					case 'save_settings':
						$loggedInUser = $this->session->getUserID();

						$this->aboutMe = $this->db->real_escape_string($_POST['aboutMe']);
						$passwordOld = $this->db->real_escape_string($_POST['oldPassword']);
						$passwordOne = $this->db->real_escape_string($_POST['newPassword']);
						$passwordTwo = $this->db->real_escape_string($_POST['reNewPassword']);

						if ($passwordOne == $passwordTwo) {
							$userPassword = $passwordOne;
							$this->passwordMatch = true;
							if($this->saveSettingsEncryptPW($this->aboutMe, $userPassword, $loggedInUser)){  //update with password encryption
			                     //SQL succesfull
								$this->error_message = "Settings successful!";
			                }else{
			                	//Update not successful
			                	$this->error_message = "Settings Unsuccessful!";
			                }                        
			            }else{//passwords dont match  show the registration form again
			                $this->passwordMatch = false;
			            }
			            $this->getSqlSettings($loggedInUser);
						break;
					case 'delete_account':
						$loggedInUser = $this->session->getUserID();
						if ($this->deleteAccount($loggedInUser)) {
							$this->hasDeleted = true;
						}else{
							$this->hasDeleted = false;
						}
						$this->logout();
						break;
					default:
						# code...
						break;
				}
			}
		}

		public function getPasswordMatch(){return $this->passwordMatch;}
		public function getIsDeleted(){return $this->hasDeleted;}

		public function getPanelHead_1(){return $this->panelHead_1;}
		public function getPanelHead_2(){return $this->panelHead_1;}

		public function getErrorMessage(){return $this->error_message;}

		public function getFullName(){return $this->fullName;}
		public function getDescription(){return $this->description;}
		public function getMemberSince(){return $this->memberSince;}
		public function getGamesPlayed(){return $this->gamesPlayed;}
		public function getGamesWon(){return $this->gamesWon;}
	}
?>