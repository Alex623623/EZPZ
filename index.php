

<?php
include ("config.php");
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Ton permis en 3 JOURS!</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/normalize.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>

	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->	
			<?php include("nav.php"); ?>
		

			<!-- Banner -->
			<section id="banner">
				<header>
				
					<h1><?php echo $lang['Ton permis de conduire en 3 jours'] ?></h1>				
				</header>
			</section>

			<!-- Intro -->
			<div class="presentation">
				<h2><?php echo $lang["On s'occupe de tout pour la réussite de ton Permis Conduire"] ?></h2>
			</div>
			<section id="intro" class="container">
				<div class="row">
					<div class="col-4 col-12-medium">
						<section class="first">
							<i class="icon featured alt1 fa-car"></i>
							
								<header>
									<h2><?php echo $lang['Boite Automatique'] ?></h2>
								</header>
								<?php echo $lang['AccueilDescAuto'] ?>
								<br>
								<?php echo $lang['AccueilPackage'] ?>
									 
									<ul class="actions">
										<li><a href="tarifs.php" class="button large"><?php echo $lang['AccueilFrom'] ?> 800 €</a></li>
									</ul>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section class="middle">
							<i class="icon featured alt2 fa-road"></i>
							<header>
								<h2><?php echo $lang['Boite Manuelle'] ?></h2>
							</header>
								<?php echo $lang['AccueilDescManu'] ?>
								<br>
								<?php echo $lang['AccueilPackage'] ?>
								<ul class="actions">
									<li><a href="manual.php" class="button alt large"><?php echo $lang['AccueilFrom'] ?> 750 €</a></li>
								</ul>
						</section>	
					</div>
					<div class="col-4 col-12-medium">
						<section class="last">
							<i class="icon featured alt1 fa-pencil"></i>
							<header>
								<h2>CODE DE LA ROUTE</h2>
							</header>
							<?php echo $lang['AccueilDesCode'] ?>
							<ul class="actions">
								<li><a href="code.php" class="button large"><?php echo $lang['AccueilFrom'] ?> 90 €</a></li>			
							</ul>
						</section>
					</div>
				</div>			
			</section>
		</section>

	<!-- Main -->
		<!-- <section id="main">
			<div class="container">
				<div class="row">
					<div class="col-12">

								

								Blog
									<section>
										<header class="major">
											<h2>The Blog</h2>
										</header>
										<div class="row">
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
													<header>
														<h3>Magna tempus consequat</h3>
														<p>Posted 45 minutes ago</p>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
															<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
													<header>
														<h3>Aptent veroeros aliquam</h3>
														<p>Posted 45 minutes ago</p>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
															<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
					</div>
				</section> -->

			<!-- Contact -->
			<?php include("contact.php");?>
			<!-- Footer -->
			<?php include("footer.php");?>

		<!-- </div> -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>