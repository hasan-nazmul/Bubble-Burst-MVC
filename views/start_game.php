<?php


	$siteTitle = $data['siteTitle'];
	//$menuNavHolder = $data['loginContent'];
	$menuNav = $data['menuNav']; 
	//$panelHead_1 = $data['panelHead_1'];
	$stringPanel_1 = $data['stringPanel_1'];
	//$panelHead_2 = $data['panelHead_2'];
	//$stringPanel_2 = $data['stringPanel_2'];

	//$stringPanel_1_game = $data['stringPanel_1_game'];

	$userFirstName = $data['userFirstName'];
	$userSurName = $data['userSurName'];

	//$GameValues = $data['gameValue'];
	//echo '<h4>$_COOKIE Array</h4>';
    //echo '<table class="table table-bordered"><thead><tr><th>KEY</th><th>VALUE</th></tr></thead>';
    //foreach($_COOKIE as $key=>$value){echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';}
    //echo '</table>';
    
    //echo "<hr>";


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
		<div class="start_game">
			<div class="shell">
				<div class="column_one">
					<div class="notification green">
						<p>Welcome, <span class="current_user"><?php echo $userFirstName . " " .$userSurName; ?></span></span></p>
					</div>
					<?php echo $stringPanel_1; ?>
				</div>
			</div>
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