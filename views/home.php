<?php

	$siteTitle = $data['siteTitle'];
	$menuNavHolder = $data['loginContent'];
	$welcomeTitle = $data['welcomeTitle'];
	$welcomeString = $data['welcomeString'];
	$slideShow = $data['slideShow'];
	$aboutMeIcon = $data['aboutMeIcon'];
	$aboutMeTitle = $data['aboutMeTitle'];
	$aboutMeString = $data['aboutMeString'];


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
					<div class="left">
						<h1><?php echo $welcomeTitle; ?></h1>
						<article>
							<?php echo "<p>$welcomeString</p>"; ?>
						</article>
					</div>

					<div class="right">
						<?php echo $slideShow; ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>


			<div class="about_me">
				<div class="shell">
					<div class="icon">
						<img src="<?php echo $aboutMeIcon; ?>" alt="K00217982">
					</div>
					<div class="about_me_title">
						<h2><?php echo "$aboutMeTitle"; ?></h2>
					</div>
					<div class="about_me_message">
						<?php echo "<p>$aboutMeString</p>"; ?>
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