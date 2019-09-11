<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

	<!-- Header -->
	<section id="header">					
		<?php include("nav.php");?>		
	</section>

	<!-- Main -->
	<section id="main">
		<div class="container">	
			<header>
				<h2><?php echo $lang['tarifsEtpay'] ?></h2>
			</header>
		<TAble class = "prices">
			<CAption> <?php echo $lang['Boite Automatique'] ?></CAption>
			
			<TR>
				<TH><?php echo $lang['lessons'] ?></TH>
				<TH>1 <?php echo $lang['paiment'] ?></TH>
				<TH>2 <?php echo $lang['paiments'] ?></TH>
				<TH>3 <?php echo $lang['paiments'] ?></TH>
			</TR>
			<TR>
				<TD>*6 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>800 €</TD>
				<TD>850 €</TD>
				<TD>900 €</TD>
			</TR>

			<TR>
				<TD>** 10 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>1100 €</TD>
				<TD>1150 €</TD>
				<TD>1200 €</TD>
			</TR>

			<TR>
				<TD>13 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>1400 €</TD>
				<TD>1450 €</TD>
				<TD>1500 €</TD>
			</TR>

		</TAble>	
		
		<TAble class = "prices">
			<CAption><?php echo $lang['Boite Manuelle'] ?></CAption>
			
			<TR>
			<TH><?php echo $lang['lessons'] ?></TH>
				<TH>1 <?php echo $lang['paiment'] ?></TH>
				<TH>2 <?php echo $lang['paiments'] ?></TH>
				<TH>3 <?php echo $lang['paiments'] ?></TH>
			</TR>
			<TR>
				<TD>*6 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>750 €</TD>
				<TD>800 €</TD>
				<TD>850 €</TD>
			</TR>

			<TR>
				<TD>** 13 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>1300 €</TD>
				<TD>1350 €</TD>
				<TD>1400 €</TD>
			</TR>

			<TR>
				<TD>20 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>1800 €</TD>
				<TD>1850 €</TD>
				<TD>1900 €</TD>
			</TR>
		</TAble>	
			
				
	<section class ="tableDesc">

		<h3><?php echo $lang['Moyen de paiment'] ?></h3>
		<p><?php echo $lang['Se possible de payer en 2 ou 3 fois par cheque uniquement'] ?></p>
		<p><?php echo $lang['Paiment en 2 fois'] ?></p>
		<p><?php echo $lang['Paiment en 3 fois'] ?></p>
	</section>
	
	<section>

	<TAble class = "prices">

	<CAption><?php echo $lang['Boite Automatique'] ?>  <?php echo $lang['en trois mensualités'] ?> </CAption>
			
			<TR>
			<TH><?php echo $lang['lessons'] ?></TH>
				<TH>1 <?php echo $lang['mensualité'] ?></TH>
				<TH>2 <?php echo $lang['mensualité'] ?></TH>
				<TH>3 <?php echo $lang['mensualité'] ?></TH>
			</TR>
			<TR>
				<TD>*6 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>450 €</TD>
				<TD>225 €</TD>
				<TD>225 €</TD>
			</TR>

			<TR>
				<TD>** 10 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>600 €</TD>
				<TD>300 €</TD>
				<TD>300 €</TD>
			</TR>

			<TR>
				<TD>** 13 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>750 €</TD>
				<TD>375 €</TD>
				<TD>375 €</TD>
			</TR>

		</TAble>	
	
		<TAble class = "prices">	
			<CAption><?php echo $lang['Boite Manuelle'] ?>  <?php echo $lang['en trois mensualités'] ?> </CAption>
			
			<TR>
			<TH><?php echo $lang['lessons'] ?></TH>
				<TH>1 <?php echo $lang['mensualité'] ?></TH>
				<TH>2 <?php echo $lang['mensualité'] ?></TH>
				<TH>3 <?php echo $lang['mensualité'] ?></TH>
			</TR>
			<TR>
				<TD>*6 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>400 €</TD>
				<TD>225 €</TD>
				<TD>225 €</TD>
			</TR>

			<TR>
				<TD>** 13 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>700 €</TD>
				<TD>350 €</TD>
				<TD>350 €</TD>
			</TR>

			<TR>
				<TD>20 <?php echo $lang['heuresConduite'] ?></TD>
				<TD>950 €</TD>
				<TD>475 €</TD>
				<TD>475 €</TD>
			</TR>
		</TAble>
	</section>	
		
	
									<h3></h3>
									<p>
										
									</p>
									
								</section>
								<section>
									<header>
										<h3></h3>
									</header>
									<p>
									</p>
								</section>
							</article>

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