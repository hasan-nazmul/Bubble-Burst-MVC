<?php
/**
* Player is created to track Player's lives
*/
class Player
{
	private $playerID;
	private $playerLives;
	function __construct($playerID)
	{
		$this->playerID = $playerID;
		$this->playerLives = 3;

		$this->set_player_lives();
	}

	public function set_player_lives($update_lives){
		$this->playerLives = $update_lives;
	}

	public function getPlayerID(){return $this->playerID;}
	public function getplayerLives(){return $this->playerLives;}
}