<?php
	$siteTitle = $data['siteTitle'];
	//$menuNavHolder = $data['loginContent'];
	$menuNav = $data['menuNav']; 
	$panelHead_1 = $data['panelHead_1'];
	$stringPanel_1 = $data['stringPanel_1'];
	$panelHead_2 = $data['panelHead_2'];
	$stringPanel_2 = $data['stringPanel_2'];

	//$stringPanel_1_game = $data['stringPanel_1_game'];

	$userFirstName = $data['userFirstName'];
	$userSurName = $data['userSurName'];

	//$message = $data['error_message'];
	//echo "Error message: " .$message;

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $siteTitle; ?></title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/game.css">
	<link rel="stylesheet" type="text/css" href="css/chat.css">
	<script>
        function IsClicked(){
          var radios = document.getElementsByName("grid");

         for (var i = 0, len = radios.length; i < len; i++) {
              if (radios[i].checked) {
                  return true;
              }
         }
         return false;
        }

        function validate(){
            if(IsClicked() != true){
              document.getElementById("p1").innerHTML = "Error - please select atleast one grid on the game board!";
              return false;
            }else{
              document.getElementById("p1").innerHTML = "Well done you have clicked a grid, but which one?";
            }
          return true;
        }

    </script>


    
</head>
<body>
		

	<div class="header">
		<div class="shell">
			<div class="logo">
				<h1><a href="index.php?pageID=home">Bubble Burst</a></h1>
			</div>
			<div class="login">
				<nav>
					<ul>
						<?php foreach($menuNav as $menuItem){echo "<li>$menuItem</li>";} //populate the navbar menu items?>
					</ul>
				</nav>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="main">
		<div class="shell">

			<div class="notification green" style="margin-top: 10px;">
				<p>NOTE: you must finish the game to see more menu items!</p>
			</div>

			<div class="left">
				<div class="game_board_header">
					<h3><?php echo $panelHead_1; ?></h3>
				</div>
				<div class="game_board">
					<?php echo $stringPanel_1; ?>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="right">
				<div class="chat">
					<div class="chat_header">
						<h1>Welcome, <span class="current_user"><?php echo $userFirstName . " " .$userSurName; ?></span></h1>
					</div>
					<?php echo $stringPanel_2; ?>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<footer class="footer">
		<div class="shell">
			<div class="copy">
				<div class="content">
					<p>Copyright &copy; 2018 Nazmul Hasan</p>
				</div>
			</div>

			<div class="social">
				<div class="content">
					<ul>
						<li><a href="facebook">f</a></li>
						<li><a href="twitter">t</a></li>
						<li><a href="insta">i</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>