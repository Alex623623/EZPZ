<!DOCTYPE HTML>


<html>
	<head>
		<title>Boite automatique</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

	<!-- Header -->
		<?php include("nav.php");?>

	<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-4 col-12-medium">

		<!-- Sidebar -->
					<section class="box">
						<a href="#" class="image featured"><img src="images/automatique.jpg" alt="" /></a>
						<header>
							<h3><?php echo $lang['Boîte de vitesse automatique'] ?></h3>
						</header>
						<p>La boîte automatique gagne du terrain en France. Notre pays était particulièrement récalcitrant à cette transmission plébiscitée partout ailleurs dans le monde, à commencer par les États-Unis, le Japon et toute l’Asie en général. Mais, depuis six ou sept ans, elle remporte un franc succès et équipe désormais 30 % des voitures neuves vendues.</p>
						<footer>
							<!-- <a href="https://www.60millions-mag.com/2019/04/29/boite-automatique-les-atouts-les-inconvenients-12743" target="_blank" class="button alt"><?php echo $lang["Lire l'article"] ?> </a> -->
							<a href="blog/indexBlog.php">Blog</a>
						</footer>
					</section>
					</div>
					
					<div class="col-8 col-12-medium imp-medium">
			<!-- Content -->
						<article class="box post">
						<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
						<header>
							<h2><?php echo $lang['Permis en boite automatique'] ?></h2>
							<p><?php echo $lang['Nos formules'] ?></p>
						</header>
						<section>
							<h3><?php echo $lang['Cours de rattrapage (6 heures de conduite)'] ?></h3>

								<ul><p> <?php echo $lang['Pré-requis'] ?>
									<li><?php echo $lang['liOneAu'] ?> </li>
									<li> <a href="code.php"><?php echo $lang['liTwoAu'] ?> </a>
									</li>
									<li> <a href="code.php"><?php echo $lang['liThreeAu'] ?></a>
									</li>
									<li><?php echo $lang['liFourAu'] ?>
									</li>	
								</ul>
							</p>			
							<p>	<?php echo $lang['text6heures'] ?>
							</p>
								<ul><?php echo $lang['AccueilPackage'] ?>
								
								</ul>
								<a href="tarifs.php" class="button alt">800 euros</a>
						</section>
						<section>
							<h3><?php echo $lang['10heures'] ?></h3>
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
							<a href="#" class="button alt">1100 euros</a>
						</section>
								
						<section>
							<h3><?php echo $lang['13heures'] ?></h3>
							<ul><?php echo $lang["Pré-requis"] ?>
								<li> <a href="code.php"><?php echo $lang['liTwoAu'] ?> </a></li>
								<li> <a href="code.php"><?php echo $lang['liThreeAu'] ?></a></li>
							</ul>
							<p><?php echo $lang['text13heures'] ?>
							<ul><?php echo $lang['AccueilPackage'] ?>
							</ul>
							<a href="#" class="button alt">1400 euros</a>
						</section>
					</article>
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