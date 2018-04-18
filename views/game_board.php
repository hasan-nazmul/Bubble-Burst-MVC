<?php
	$siteTitle = $data['siteTitle'];
	$menuNavHolder = $data['loginContent'];
	$panelHead_1 = $data['panelHead_1'];
	$stringPanel_1 = $data['stringPanel_1'];
	$panelHead_2 = $data['panelHead_2'];
	$stringPanel_2 = $data['stringPanel_2'];
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $siteTitle; ?></title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/games.css">
	<link rel="stylesheet" type="text/css" href="css/chats.css">
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
				<h1>Company Logo</h1>
			</div>
			<div class="login">
				<?php echo $menuNavHolder; ?>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="main">
		<div class="game_board">
			<div class="shell">
				<div class="left">
					<?php echo $stringPanel_1; ?>
				</div>

				<div class="right">
					<?php echo $stringPanel_2; ?>
				</div>
				<div class="clearfix"></div>
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