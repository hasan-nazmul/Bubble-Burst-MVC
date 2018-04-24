<?php
/**
* Generates enemy object
*/
class Enemy
{
	private $cellNr;
	private $cellValue; //0 is friendly 1 is vicious
	private $cellClicked = false;
	function __construct($cell_nr, $cell_value, $cell_clicked)
	{
		$this->cellNr = $cell_nr;
		$this->cellValue = $cell_value;
		$this->cellClicked = $cell_clicked;
	}

	public function updateCellState($cell_state){
		if ($cell_state == true) {
			$this->cellClicked = true;
		}else{
			$this->cellClicked = false;
		}
	}
}