<?php
/**
* 
*/
class LeaderBoard extends Model
{
	private DatePlayed;
	private PlayerName;
	private GamesPlayed;
	private HighestPoints;
	private GamesWon;
	private GamesLost;

	//For database connection and switchig pages
	private $pageID;
	private $db;
	private $userID;
	
	function __construct($PageID, $UserID, $DB, $session)
	{
		$this->session = $session;
		parent::__construct($this->session->getLoggedIn());

		$this->userID = $UserID;
		$this->db = $DB;
		$this->pageID = $PageID;

		$this->setDatePlayed();
		$this->setPlayerName();
		$this->setGamesPlayed();
		$this->setHighestPoints();
		$this->setGamesWon();
		$this->setGamesLost();
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