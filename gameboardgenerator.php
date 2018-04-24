<?php
	$stringGamePanel = file_get_contents('forms/form_game_board.html');
	$stringChatPanel = file_get_contents('forms/form_chat.html');

	$data = array();

	for ($i=0; $i < 100; $i++) {
		//initialize all 100 numbers with zero
		$data[$i] = 0;
	}


	$RAND_MIN = 0;
	$RAND_MAX = 9;
	$SWAP = 0;
	$INCREASE = 0;
	$rowCounter = 0;
	while($rowCounter != 10){
		$randomEnemySelector = rand($RAND_MIN, $RAND_MAX); //Create a number number
		$data[$randomEnemySelector] = 1;
		$INCREASE = $randomEnemySelector;
		if($randomEnemySelector - 3 < 0){
			//DO NOTHING
		}else{
			$data[$randomEnemySelector - 3] = 1;
			$INCREASE += 3;
			if($INCREASE > 99){
				$INCREASE = 99;
			}
		}

		//Checks if the increased position in data[] array is equal to 0 if so assign the value 1 as an enemy
		if($data[$INCREASE] == 0){
			$data[$INCREASE] = 1;
		}
		$RAND_MIN = $RAND_MAX + 1;
		$RAND_MAX += 10;
		$rowCounter++;
	}

	foreach ($data as $key => $value) {
	    echo "{$key} => {$value} </br>";
	}

?>