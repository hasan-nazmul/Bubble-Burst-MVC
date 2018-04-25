<?php
	$siteTitle = $data['siteTitle'];
	//$menuNavHolder = $data['loginContent'];
	$menuNav = $data['menuNav'];
	$panelHead_1 = $data['panelHead_1'];
	$panelHead_2 = $data['panelHead_2'];

	//About me content
	$fullName = $data['full_name'];
	$description = $data['description'];
	$memberSince=$data['member_since'];
	$gamesPlayed=$data['games_played'];
	$gamesWon=$data['games_won'];


	//Settings content
	//Nothing to import for right side
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
			<div class="left">
				<div class="game_board_header">
					<h1><?php echo $panelHead_1; ?></h1>
				</div>
				<div class="account_info">
					<div class="widget">
						<!--<div class="widget_header">
							<h1>About Me</h1>
						</div>-->
						<div class="widget_content">
							<h2><span class="name"><?php echo $fullName; ?></span></h2>
							<p><span class="description"><?php echo $description; ?></span></p>
							<p class="member_since">Member since: <span><?php echo $memberSince; ?></span></p>
						</div>
					</div>

					<div class="widget">
						<div class="widget_content">
							<p>Games Played: <span class="games_palyed"><?php echo $gamesPlayed; ?></span></p>
							<p>Games Won: <span class="games_won"><?php echo $gamesWon; ?></span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="right">
				<div class="chats">
					<div class="game_board_header">
						<h1><?php echo $panelHead_2; ?></span></h1>
					</div>
					<div class="right_content">
						<div class="account_info">
							<form method="POST" action="index.php?pageID=save_settings">
								<div class="widget">
									<div class="widget_header">
										<h1>About Me</h1>
									</div>
									<div class="widget_content">
										<textarea name="aboutMe"><?php echo $description; ?></textarea>
									</div>
								</div>

								<div class="widget">
									<div class="widget_header">
										<h1>Change Password</h1>
									</div>
									<div class="widget_content">
										<input type="password" name="oldPassword" placeholder="Old password" class="old_password">
										<input type="password" name="newPassword" placeholder="New password" class="new_password">
										<input type="password" name="reNewPassword" placeholder="Re-type new password" class="re_new_password">
									</div>
								</div>

								<input type="submit" name="saveSettings" value="Save Settings" class="save_settings">
							</form>

							<form method="POST" action="index.php?pageID=delete_account">
								<input type="submit" name="deleteAccount" value="Delete Account" class="delete_account">
							</form>
							<div class="clearfix"></div>
						</div>
					</div>
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