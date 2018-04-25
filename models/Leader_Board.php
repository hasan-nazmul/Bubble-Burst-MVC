<?php
/**
* 
*/
class LeaderBoard extends Model
{
	private $DatePlayed;
	private $PlayerName;
	private $GamesPlayed;
	private $HighestPoints;
	private $GamesWon;
	private $GamesLost;

	private $error_message;

	//For view
	private $panelHead_1;
	private $stringPanel_1;

	private $data;
	private $global_counter;

	//For database connection and switchig pages
	private $pageID;
	private $db;
	private $userID;
	
	function __construct($PageID, $UserID, $DB, $session)
	{
		$this->data=[];
		$this->global_counter = 0;

		$this->session = $session;
		parent::__construct($this->session->getLoggedIn());

		$this->userID = $UserID;
		$this->db = $DB;
		$this->pageID = $PageID;

		$this->setPanelHead_1();
		$this->setStringPanel_1();

		/*$this->setDatePlayed();
		$this->setPlayerName();
		$this->setGamesPlayed();
		$this->setHighestPoints();
		$this->setGamesWon();
		$this->setGamesLost();*/
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


	private function getSqlCountLeaderBoard(){
		$counter = 0;
		$sql='SELECT users.FirstName as fName, users.LastName as sName, COUNT(result.GameID) as GamesPlayed, MAX(result.Points) as Points, result.Win as Wins FROM result INNER JOIN users ON users.UserID=result.UserID GROUP BY result.UserID ORDER BY MAX(result.Points) DESC';
		if ($result=$this->db->query($sql)) {
			while($row = mysqli_fetch_array($result)){
				$counter++;

				$fullName = $row['fName']. " " .$row['sName'];
				$totalPlayed = $row['GamesPlayed'];
				$totalWon = $row['Wins'];
				$gamesLost =  $totalPlayed - $totalWon;

				$this->stringPanel_1 .= "<tr>";
				$this->stringPanel_1 .= "<td>" .$counter. "</td><td>" .$fullName. "</td><td>" .$row['GamesPlayed']. "</td><td>" .$row['Points']. "</td><td>" .$row['Wins']. "</td><td>" .$gamesLost. "</td></tr>";
			}
		}
	}

	private function setPanelHead_1(){
		if ($this->loggedin) {
			switch ($this->pageID) {
				case 'leaderboard':
					$this->panelHead_1 = "Leaderboard";
					break;
				default:
					# code...
					break;
			}
		}
	}

	private function setStringPanel_1(){
		if ($this->loggedin) {
			switch ($this->pageID) {
				case 'leaderboard':
					$this->getSqlCountLeaderBoard();
					break;
				default:
					$this->stringPanel_1 = "No Result";
					break;
			}
		}
	}

	private function setDatePlayed($temp){
		$this->DatePlayed=$temp;
	}

	private function setPlayerName($temp){
		$this->PlayerName=$temp;
	}

	private function setGamesPlayed($temp){
		$this->GamesPlayed=$temp;
	}

	private function setHighestPoints($temp){
		$this->HighestPoints=$temp;
	}

	private function setGamesWon($temp){
		$this->GamesWon=$temp;
	}

	private function setGamesLost($temp){
		$this->GamesLost=$temp;
	}

	public function getPanelHead_1(){
		return $this->panelHead_1;
	}

	public function getStringPanel_1(){
		return $this->stringPanel_1;
	}

	public function getDatePlayed(){
		return $this->DatePlayed;
	}

	public function getPlayerName(){
		return $this->PlayerName;
	}

	public function getGamesPlayed(){
		return $this->GamesPlayed;
	}

	public function getHighestPoints(){
		return $this->HighestPoints;
	}

	public function getGamesWon(){
		return $this->GamesWon;
	}

	public function getGamesLost(){
		return $this->GamesLost;
	}
}
?>