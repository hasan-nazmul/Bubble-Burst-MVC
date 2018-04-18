<?php
	$stringGamePanel = file_get_contents('forms/form_game_board.html');
	$stringChatPanel = file_get_contents('forms/form_chat.html');

	$data = array();

	for ($i=0; $i < 100; $i++) { 
		$data[] = (0);
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

		if($data[$INCREASE] == 0){
			$data[$INCREASE] = 1;
		}
		$RAND_MIN = $RAND_MAX + 1;
		$RAND_MAX += 10;
		$rowCounter++;
	}

	foreach ($data as $key => $value) {
	    //echo "{$key} => {$value} </br>";
	}

?>