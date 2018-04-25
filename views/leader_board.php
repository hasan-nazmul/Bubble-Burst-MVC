<?php
	$siteTitle = $data['siteTitle'];
	//$menuNavHolder = $data['loginContent'];
	$menuNav = $data['menuNav']; 
	$panelHead_1 = $data['panelHead_1'];
	$stringPanel_1 = $data['stringPanel_1'];
	$user = $data['fullname'];
?>



<!DOCTYPE html>
<html>
<head>
	<title><?php echo $siteTitle; ?></title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/leaderboard.css">
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
				<div class="leaderboard">
					<div class="leaderboard_header">
						<h1 class="pHead"><?php echo $panelHead_1; ?></h1>
						<p class="user">Howdy, <?php echo $user; ?></p>
						<div class="clearfix"></div>
					</div>
					<div class="leaderboard_content">
						<table>
							<tbody>
								<tr>
									<th>ID</th>
									<th>Player Name</th>
									<th>Games Played</th>
									<th>Highest Points</th>
									<th>Games Won</th>
									<th>Games Lost</th>
								</tr>
								<?php echo $stringPanel_1; ?>
							</tbody>
						</table>
					</div>
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