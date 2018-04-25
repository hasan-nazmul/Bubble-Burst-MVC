<?php

	$siteTitle = $data['siteTitle'];
	//$menuNavHolder = $data['loginContent'];
	$menuNav=$data['menuNav'];
	$stringPanel_1 = $data['stringPanel_1'];
	$errorHead=$data['errorHead'];
	$error_message=$data['error_message'];
	$isRegSuccess=$data['regResult'];

?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo $siteTitle; ?></title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
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
		<!--<div class="welcome">
			<div class="shell">
				<?php //echo $stringPanel_1; ?>
			</div>
		</div>-->
		<div class="welcome">
				<div class="shell">
					<div class="left">
						<?php
							if ($isRegSuccess == true) {
								echo $stringPanel_1;
							}else{
								echo '<div class="notification red"><h1>'.$errorHead.'</h1>';
								echo '<article><p>'.$error_message.'</p></article></div>';
							}
						?>
					</div>

					<div class="right">
						<?php
							if ($isRegSuccess == true) {
								# code...
							}else{
								echo '<div class="login_view">';
								echo '<div class="panelHead">
										<h3>Sign Up</h3>
										<p>Free early access, limited time!</p>
									</div>';
								echo '<div class="stringPanel">
										<form class="register" method="POST" action="index.php?pageID=process_registration">';
								echo $stringPanel_1;
								echo '</form>
							</div>
						</div>';
							}
						?>

						<!--<div class="login_view">
							<div class="panelHead">
								<h3>Sign Up</h3>
								<p>Free early access, limited time!</p>
							</div>
							<div class="stringPanel">
								<form class="register" method="POST" action="index.php?pageID=process_registration">
									<?php //echo $stringPanel_1; ?>
								</form>
							</div>
						</div>-->
						
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