<?php

include_once 'SqlConnection.php';

$sql = "CREATE TABLE IF NOT EXISTS Result(
UserID varchar(20)NOT NULL,
GameID varchar(40) NOT NULL PRIMARY KEY,
DatePlayed datetime,
Points int(2) NOT NULL,
Lives int(2) NOT NULL,
Win int(1) NOT NULL
)";

if($conn -> query($sql) === TRUE){
    echo "<br><br>Table: Result, has been created successfully!";
}else{
    echo "<br><br>Error creating Table: " .$conn->error;
}
$conn->close();
?>

