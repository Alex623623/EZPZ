<!DOCTYPE HTML>

<html>
	<head>
		<title>Dopetrope by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

		<!-- Header -->
		<section id="header">
			<?php include("nav.php");?>
		</section>

		<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-8 col-12-medium">
		<!-- Content -->
					<article class="box post">
					<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
					<header>
							<h2><?php echo $lang['Boîte de vitesse manuelle'] ?></h2>
						<p><?php echo $lang['Nos formules'] ?></p>
					</header>
					<section>
						<h3><?php echo $lang['Cours de rattrapage (6 heures de conduite)'] ?></h3>
						<ul><p> <?php echo $lang['Pré-requis'] ?> </p>
							<li><?php echo $lang['liOneAu'] ?> </li>
							<li> <a href="code.php"><?php echo $lang['liTwoAu'] ?> </a></li>
							<li> <a href="code.php"><?php echo $lang['liThreeAu'] ?></a></li>
							<li><?php echo $lang['liFourAu'] ?></li>	
						</ul>				
						<p>	<?php echo $lang['text6heures'] ?></p>
						<ul><?php echo $lang['AccueilPackage'] ?>	
						</ul>
						<a href="tarifs.php" class="button alt">750 euros</a>
					</section>

					<section>
						<h3><?php echo $lang['13heures'] ?></h3>
						<ul> <?php echo $lang['Pré-requis'] ?>
							<li><?php echo $lang['permisEtrangere'] ?></li>
							<li> <a href="code.php"><?php echo $lang['liTwoAu'] ?> </a></li>
							<li> <a href="code.php"><?php echo $lang['liThreeAu'] ?></a></li>
							<li><?php echo $lang['liFourAu'] ?></li>		
						</ul>
						<p> <?php echo $lang['text10heures'] ?></p>
						<ul>
							<li><?php echo $lang['AccueilPackage'] ?></li>
						</ul>
						<a href="#" class="button alt">1300 euros</a>
					</section>
								
					<section>
						<h3><?php echo $lang['20heures'] ?></h3>
						<ul><?php echo $lang["Pré-requis"] ?>
							<li> <a href="code.php"><?php echo $lang['liTwoAu'] ?> </a></li>
							<li> <a href="code.php"><?php echo $lang['liThreeAu'] ?></a></li>
						</ul>
						<p><?php echo $lang['text13heures'] ?>
						<ul><?php echo $lang['AccueilPackage'] ?>
						</ul>
						<a href="#" class="button alt">1800 euros</a>
					</section>
				</article>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section class="box">
										<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
										<header>
											<h3>Sed etiam lorem nulla</h3>
										</header>
										<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
										<footer>
											<a href="#" class="button alt">Magna sed taciti</a>
										</footer>
									</section>
									<section class="box">
										<header>
											<h3>Feugiat consequat</h3>
										</header>
										<p>Veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat sed lorem consequat feugiat lorem dolore.</p>
										<ul class="divided">
											<li><a href="#">Sed et blandit consequat sed</a></li>
											<li><a href="#">Hendrerit tortor vitae sapien dolore</a></li>
											<li><a href="#">Sapien id suscipit magna sed felis</a></li>
											<li><a href="#">Aptent taciti sociosqu ad litora</a></li>
										</ul>
										<footer>
											<a href="#" class="button alt">Ipsum consequat</a>
										</footer>
									</section>

							</div>
						</div>
					</div>
				</section>

		
			<!-- Contact -->
			<?php include("contact.php");?>
			<!-- Footer -->
			<?php include("footer.php");?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>