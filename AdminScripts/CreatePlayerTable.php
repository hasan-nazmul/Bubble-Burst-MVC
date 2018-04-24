<?php

include_once 'SqlConnection.php';

$sql = "CREATE TABLE IF NOT EXISTS Player(
UserID varchar(20)NOT NULL,
GameID varchar(40) NOT NULL PRIMARY KEY,
Lives int(1) NOT NULL,
TotalMoves int(2) NOT NULL
)";

if($conn -> query($sql) === TRUE){
    echo "<br><br>Table: Player, has been created successfully!";
}else{
    echo "<br><br>Error creating Table: " .$conn->error;
}
$conn->close();
?>

