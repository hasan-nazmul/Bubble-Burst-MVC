<?php

session_start();

//include application configuration settings
include_once 'config/config.php';
include_once 'config/connection.php';

//include class libraries
include_once 'classlibs/Model.php';
include_once 'classlibs/Controller.php';
include_once 'classlibs/Session.php';

//include MVC classes
include_once 'controllers/MainController.php';
include_once 'models/Home.php';
include_once 'models/Register.php';
include_once 'models/Game_Board.php';

//Include Player & Enemy
include_once 'game_objects/Player.php';
include_once 'game_objects/Enemy.php';


//connect to the MySQL Server (with error reporting supression '@')
@$db=new mysqli($DBServer,$DBUser,$DBPass,$DBName);

if($db->connect_errno){  //check if there is an error in the connection
    $msg='Error making connection to MySQL Server using MySQLi- check your server is running and you have the correct host IP address.<br>MySQLi Error message: '.$conn->connect_error.'<br>'; 
    exit($msg);  
}

//session class
$session=new Session();


//start the app
$mainController=new MainController($db,$session);


