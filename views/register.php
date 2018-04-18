<?php

	$siteTitle = $data['siteTitle'];
	$menuNavHolder = $data['loginContent'];
	$panelHead_1 = $data['panelHead_1'];
	$stringPanel_1 = $data['stringPanel_1'];


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
		<div class="welcome">
			<div class="shell">
				<?php echo $stringPanel_1; ?>
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