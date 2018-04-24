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

		private $loginContent;

		//Properties used by class to manage view content and database interactions
		private $pageID;
		private $db;
		private $sql;
		private $loginError;
		private $session;

		private $playerLives;
		private $playerPoints;

		private $BoardValue=[];

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

			//$this->setGameValues();

			$this->setUserFullName();
		}

		private function setGameValues(){
            //$data = array();
			//$this->BoardValue=[];
            for ($i=0; $i < 100; $i++) {
                //initialize all 100 numbers with zero
                $this->BoardValue[$i] = 0;
            }

            $RAND_MIN = 0;
            $RAND_MAX = 9;
            $INCREASE = 0;
            $rowCounter = 0;
            while($rowCounter != 10){
                $randomEnemySelector = rand($RAND_MIN, $RAND_MAX); //Create a number number
                $this->BoardValue[$randomEnemySelector] = 1;
                $INCREASE = $randomEnemySelector;
                if($randomEnemySelector - 3 < 0){
                    //DO NOTHING
                }else{
                    $this->BoardValue[$randomEnemySelector - 3] = 1;
                    $INCREASE += 3;
                    if($INCREASE > 99){
                        $INCREASE = 99;
                    }
                }

                //Checks if the increased position in BoardValue[] array is equal to 0 if so assign the value 1 as an enemy
                if($this->BoardValue[$INCREASE] == 0){
                    $this->BoardValue[$INCREASE] = 1;
                }
                $RAND_MIN = $RAND_MAX + 1;
                $RAND_MAX += 10;
                $rowCounter++;
            }
        }

		public function setPanelHead_1(){
			if($this->loggedin){
				$this->panelHead_1 = 'Bubble Burst [version: 1.0]';
			}else{
				$this->panelHead_1 = 'Error - restricted access!';
			}
		}

		public function setPanelString_1(){
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
                            $this->stringPanel_1= file_get_contents('forms/form_start_game.html');
                            //$this->stringPanel_2= file_get_contents('forms/form_chat.html');
                            //$this->loginContent = file_get_contents('forms/nav.html');
                        }
                        else{
                            $this->session->setLoggedin(FALSE);  //user is not logged on
                            $this->session->setUserAuthorisation(0); //privileges set to none
                            $this->stringPanel_1='Login NOT Successful!</br>'.$this->sql. '</br>' .$this->loginError;
                        }
						break;
					case 'new_game':
						
						$this->setGameValues();

						$this->session->setPlayerLives(3);//Assign the player with life value of (3)
						$this->playerLives=$this->session->getPlayerLives();
						$this->session->setPlayerPoints(0);
						$this->playerPoints=$this->session->getPlayerPoints();

						$NewGameID = $this->createUniqueId();
						$this->session->setGameID($NewGameID);
						//$this->session->setCurrentGameCookie($NewGameID);



						$tempGameID="";
						$tempMessage = "";

						$tempDate = date("Y/m/d");

						$sql_insert_game_id='INSERT INTO `bubble_burst`.`game` (`dateCreated`, `UserID`, `GameID`)VALUES("'.$tempDate.'", "'.$this->session->getUserID().'", "'.$NewGameID.'")';
			            if(@$this->db->query($sql_insert_game_id)){  //execute the query and check it worked    
			                $this->loginContent = "Successful inserted GameID";
			            } 
			            else{
			                $this->loginContent = "Error inserting GameID";
			            }

			            $sql_select_game_id='SELECT GameID FROM game WHERE GameID="'.$NewGameID.'"';
			        	if($rs=$this->db->query($sql_select_game_id)){ 
			        		$row=$rs->fetch_assoc(); 
			                if ($rs->num_rows>0){
			                    $tempGameID = $row['GameID'];  
			                }else{
			                	$tempGameID = "No record found!"; 
			                }
			            }

						$recordCounter = 0;
						$this->stringPanel_1 = '<h3 class="lives">Lives: '.$this->playerLives.' <span class="points"> Points: '.$this->playerPoints.'</span></h3>';
						$this->stringPanel_1 .= '<form id="game" onSubmit="return validate();" method="POST" action="'.$_SERVER['PHP_SELF'].'?pageID=play"><table><tbody>';
						for ($i=0; $i < 10 ; $i++) {
							$this->stringPanel_1 .='<tr>';
							for ($j=0; $j < 10 ; $j++) { 
								$this->stringPanel_1 .='<td><input type="radio" name="grid" value="'.$recordCounter.'"></td>';
								//$newGridID="gid_'.$recordCounter.'";
								$newGridID = "grid_".$recordCounter;
								//$newGridIDValue=$i."_".$recordCounter;
								$newGridIDValue=$recordCounter;

								$newGridValueID = "value_".$recordCounter;
								$newGridValue = $this->BoardValue[$recordCounter];

					            $sql="UPDATE game SET $newGridID='".$newGridIDValue."', $newGridValueID='".$newGridValue."' WHERE GameID='".$tempGameID."'";
					            if(@$this->db->query($sql)){ 
					                $tempMessage = "Successful";
					            } 
					            else{
					                $tempMessage = "Error";
					            }

								$recordCounter++;
							}
							$this->stringPanel_1 .='</tr>';
						}
						$this->stringPanel_1 .= '</tbody></table>';
						$this->stringPanel_1 .= '<input type="submit" name="submit" value="Play">';
						$this->stringPanel_1 .='</form>';
						break;
					case 'play':
						$tempMessage = "";
						$recordCounter = 0;
						$gridValue = "";
						$tempGameID = $this->session->getGameID();
						$tempResultValue;

						$disableButton = "";
						$setButtonState = 0;

						


						//Get current radio button id, query db, check if match found, then set clicked_x to true or (1)
						//Will be used to subtract Player Life
			            $gridValue = $this->db->real_escape_string($_POST['grid']);
			            $newGridValueID = "value_".$gridValue;
			            $sql_value='SELECT '.$newGridValueID.' FROM game WHERE GameID="'.$tempGameID.'"';
			        	if($rs_value=$this->db->query($sql_value)){ 
			        		$row_value=$rs_value->fetch_assoc(); 
			                if ($rs_value->num_rows>0){
			                    $tempResultValue = $row_value[$newGridValueID];
			                    $this->loginContent = "Value Query Successful: " .$tempResultValue;
			                }else{
			                	$tempResultValue = "No record found!";
			                }
			            }


			            //Check result table to see if GameID exists in result table so the result table gets updated at the end of the game only once
			            $ResultGameID = false;
			            $sql_result_game_id = 'SELECT GameID FROM result WHERE GameID="'.$tempGameID.'"';
			            if ($rs_result_game_id=$this->db->query($sql_result_game_id)) {
			            	$row_result_game_id=$rs_result_game_id->fetch_assoc();
			            	if ($rs_result_game_id->num_rows>0) {
			            		$ResultGameID=true;
			            		//$this->loginContent = "Result table Query Successful: " .$ResultGameID;
			            	}else{
			            		$ResultGameID=false;
			            		//$this->loginContent = "No game ID found result table";
			            	}
			            }

			            //Determines win and lose
			            //Update Player Lives NOTE: (0) is friendly and (1) is an enemy
			            if ($tempResultValue == 1) {
			            	$this->session->updatePlayerLives(1);
			            	$getLives = $this->session->getPlayerLives();
			            	if ($getLives == 0) { //user have lost the game
			            		$tempDate = date("Y/m/d");
			            		$this->getUserInfo();
			            		$this->stringPanel_1 = '<h3>YOU HAVE LOST<br>';
			            		$this->stringPanel_1 .='Player Name: '.$this->userFirstName.' ' .$this->userLastName . '</br>';
			            		$this->stringPanel_1 .='GameID: '.$this->session->getGameID().'</br>';
			            		$this->stringPanel_1 .='Lives: '.$this->session->getPlayerLives().'</br>';
			            		$this->stringPanel_1 .='Points Scored: '.$this->session->getPlayerPoints(). '</h3>';
			            		$this->stringPanel_1 .='<div class="return_home"><form method="post" action="'.$_SERVER['PHP_SELF'].'?pageID=home"><input type="submit" name="submit" value="Return Home"></form></div>';

			            		if ($ResultGameID == true) {
			            			$this->stringPanel_1 .= '<h3>Error - possible duplicate result entry</h3>';
			            		}else{
			            			$sql_insert_result='INSERT INTO `bubble_burst`.`result` (`UserID`, `GameID`, `DatePlayed`, `Points`, `Lives`, `Win`)VALUES("'.$this->session->getUserID().'", "'.$this->session->getGameID().'", "'.$tempDate.'", '.$this->session->getPlayerPoints().', '.$getLives.', 0)';
						            if(@$this->db->query($sql_insert_result)){  //execute the query and check it worked    
						                $this->loginContent = "Successful inserted INTO Result table";
						            } 
						            else{
						                $this->loginContent = "Error inserting INTO Result table";
						            }
			            		}
			            		return true;
			            	}
			            }else if($tempResultValue == 0){
			            	$this->session->updatePlayerPoints(1);
			            	$getPoints=$this->session->getPlayerPoints();
			            	if ($getPoints == 10) { //User have won the game
			            		$tempDate = date("Y/m/d");
			            		$this->getUserInfo();
			            		$this->stringPanel_1 = '<h3>YOU HAVE WON<br>';
			            		$this->stringPanel_1 .='Player Name: '.$this->userFirstName.' ' .$this->userLastName . '</br>';
			            		$this->stringPanel_1 .='GameID: '.$this->session->getGameID().'</br>';
			            		$this->stringPanel_1 .='Lives: '.$this->session->getPlayerLives().'</br>';
			            		$this->stringPanel_1 .='Points Scored: '.$this->session->getPlayerPoints(). '</h3>';
			            		$this->stringPanel_1 .='<div class="return_home"><form method="post" action="'.$_SERVER['PHP_SELF'].'?pageID=home"><input type="submit" name="submit" value="Return Home"></form></div>';

			            		if ($ResultGameID == true) {
			            			$this->stringPanel_1 .= '<h3>Error - possible duplicate result entry</h3>';
			            		}else{
			            			$sql_insert_result='INSERT INTO `bubble_burst`.`result` (`UserID`, `GameID`, `DatePlayed`, `Points`, `Lives`, `Win`)VALUES("'.$this->session->getUserID().'", "'.$this->session->getGameID().'", "'.$tempDate.'", '.$getPoints.', '.$this->session->getPlayerLives().', 1)';
						            if(@$this->db->query($sql_insert_result)){  //execute the query and check it worked    
						                $this->loginContent = "Successful inserted INTO Result table";
						            } 
						            else{
						                $this->loginContent = "Error inserting INTO Result table";
						            }
			            		}
			            		return true;
			            	}
			            }
			            //Get the Players current life
			            $this->playerLives=$this->session->getPlayerLives();
			            $this->playerPoints=$this->session->getPlayerPoints();

			            //Update clicked
			            $Clicked = "clicked_".$gridValue; //set the value of db to (1) for clicked and (0) for not clicked
			            $sql="UPDATE game SET $Clicked='1' WHERE GameID='".$tempGameID."'";
			            if(@$this->db->query($sql)){ 
			                $tempMessage = "Successful";
			            } 
			            else{
			                $tempMessage = "Error";
			            }

			            //Re-Generate table
			            $recordCounter = 0;
			            $this->stringPanel_1 = '<h3 class="lives">Lives: '.$this->playerLives.' <span class="points"> Points: '.$this->playerPoints.'</span></h3>';
						$this->stringPanel_1 .= '<form onSubmit="return validate();" method="POST" action="'.$_SERVER['PHP_SELF'].'?pageID=play"><table><tbody>';
						for ($i=0; $i < 10 ; $i++) {
							$this->stringPanel_1 .='<tr>';
							for ($j=0; $j < 10 ; $j++) {
								$checkIsClicked = "clicked_".$recordCounter;
								$sql_check_if_clicked='SELECT '.$checkIsClicked.' FROM game WHERE GameID="'.$tempGameID.'"';
					            if($check_if_clicked=$this->db->query($sql_check_if_clicked)){ 
					        		$rowClicked=$check_if_clicked->fetch_assoc(); 
					                if ($check_if_clicked->num_rows>0){
					                    $setButtonState = $rowClicked[$checkIsClicked];
					                    //$this->loginContent = "IsClicked Query Successful: " .$setButtonState;
					                }else{
					                	$this->loginContent = "Zero rows returned";
					                }
					            }else{
					            	$this->loginContent = "Query was not successful!";
					            }

					            if ($setButtonState == 1) {
			                    	$disableButton="disabled";
			                    	//$this->loginContent="disabled";
			                    }else{
			                    	$disableButton="not"; //Set it to empty incase of HTML error
			                    	//$this->loginContent="not disabled: ".$checkIsClicked;
			                    }

								$this->stringPanel_1 .='<td><input type="radio" name="grid" value="'.$recordCounter.'" '.$disableButton.'></td>';
								

								$recordCounter++;
							}
							$this->stringPanel_1 .='</tr>';
						}
						$this->stringPanel_1 .= '</tbody></table>';
						$this->stringPanel_1 .= '<input type="submit" name="submit" value="Play">';
						$this->stringPanel_1 .='</form>';

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


		private function getRandomWord($len = 10) {
		    $word = array_merge(range('a', 'z'), range('A', 'Z'));
		    shuffle($word);
		    return substr(implode($word), 0, $len);
		}

		public function createUniqueId() {

            $MATCH_FOUND = true; //Assume the NewGameID Matches
            $tempGameID = 'NO_ID_RETURNED';
            $db_GameID = "";
		    while ($MATCH_FOUND == true) {
		        $word = $this->getRandomWord(); //generate a random word

		        $tempGameID=hash('ripemd160', $word); //Convert it into 40 character long string

		        $sql='SELECT GameID FROM game WHERE GameID="'.$tempGameID.'"';
	        	if($rs=$this->db->query($sql)){  //execute the query and check it worked and returned data
	        		$row=$rs->fetch_assoc(); 
	                if ($rs->num_rows>0){
	                    //$MATCH_FOUND = true; //If match found then set the value to true so the loop runs again
	                    $db_GameID = $row['GameID'];
	                }else{
	                	$MATCH_FOUND = false;
	                	//return $tempGameID; //If GameID not found return new random word
	                }
	            }

	            if ($tempGameID != $db_GameID) {
	            	return $tempGameID;
	            }else{
	            	$MATCH_FOUND = false;
	            }
		    }
		}

		public function setPanelHead_2(){
			if($this->loggedin){
				switch ($this->pageID) {
					case 'home':
						# code...
						break;
					case 'new_game':
						
						break;
					default:
						# code...
						break;
				}
			}else{
				$panelHead_2 = 'User not logged in';
			}
		}

		public function setPanelString_2(){
			if($this->loggedin){
				switch ($this->pageID) {
					case 'home':
						# code...
						break;
					case 'new_game':
						$this->stringPanel_2 = file_get_contents('forms/form_chat.html');
						break;
					case 'play':
						$this->stringPanel_2 = file_get_contents('forms/form_chat.html');
						break;
					default:
						# code...
						break;
				}
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
            $sql='SELECT  * FROM users WHERE UserID="'.$this->userID.'" AND Password="'.$this->password.'"';
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

        private function getUserInfo(){
        	$sql='SELECT FirstName, LastName FROM users WHERE UserID="'.$this->session->getUserID().'"';
        	if($rs=$this->db->query($sql)){  //execute the query and check it worked and returned data
        		$row=$rs->fetch_assoc(); 
                if ($rs->num_rows>0){
                    $this->userFirstName=$row['FirstName'];
                	$this->userLastName=$row['LastName'];        
                }else{
                	$this->userFirstName= 'Unknown Name ';
                	$this->userLastName='0 record returned'; 
                }
            }
        }

        private function getGameID(){
        	//Code...
        }

        //Sets the user full name depending on the pageID
        public function setUserFullName(){
        	switch ($this->pageID) {
        		case 'process_login':
        			$this->getUserInfo();
        			break;
        		case 'home':
        			$this->getUserInfo();
        			break;
        		case 'leaderboard':
        			$this->getUserInfo();
        			break;
        		case 'my_account':
        			$this->getUserInfo();
        			break;
        		case 'new_game':
        			$this->getUserInfo();
        			break;
        		case 'play':
        			$this->getUserInfo();
        			break;
        		default:
        			//echo 'Un-authorised page!'; 
        			break;
        	}
        }

        public function getPlayerLives(){return $this->playerLives;}
        public function getGameValues(){return $this->BoardValue;}
        public function getPanelHead_1(){return $this->panelHead_1;}
        public function getStringPanel_1(){return $this->stringPanel_1;}
        public function getPanelHead_2(){return $this->panelHead_2;}
        public function getStringPanel_2(){return $this->stringPanel_2;}
        public function getLoginContent(){return $this->loginContent;}
        public function getUserFirstName(){return $this->userFirstName;}
        public function getUserSurName(){return $this->userLastName;}
        public function getSQL(){return $this->sql;}

	}

?>