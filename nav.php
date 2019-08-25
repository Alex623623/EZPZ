<?php
include ("config.php");
?>
	

<!-- Nav -->
	<nav id="nav">
	
		<ul>
			<li>
			 <?php echo '<img  class="logo" src="http://localhost:8888/AUTO/images/EZPZlogo.png"/>'; ?></a> </li>
			<!-- <li><img class="logo"src="images/EZPZlogo.png" alt="logo"></li> -->
			<li class="current">
				<p><a href="index.php"><?php echo $lang['Accueil'] ?></a></p></li>
			<li class="current">
				<p><a href="#"><?php echo $lang['Nos formules'] ?></a></p>
				<ul class="menu">
						<li><a href="auto.php"><?php echo $lang['Boite Automatique'] ?></a></li>
						<li><a href="manual.php"><?php echo $lang['Boite Manuelle'] ?></a></li>
						<li><a href="code.php"><?php echo $lang['Code de la route'] ?></a></li>
				</ul></li>
			<li class="current">
				<p><a href="tarifs.php"><?php echo $lang['tarifs'] ?></a></li></p>
			<li class="current">
				<p><a href="partenairs.php"><?php echo $lang['nos services'] ?></a></li></p>
			<li class="current">
				<p><a href="blog/index.php">Blog
					
				</a></li></p>
			<li class="flag">
				<a href="index.php?lang=en"><img src="images/united-kingdom-flag-button-square-icon-64.png" alt="ENGLISH VERSION"></a>
				<a href="index.php?lang=fr"><img src="images/france-flag-3d-icon-64.png" alt="FRENCH VERSION"></a>
			</li>
		</ul>
	</nav>
	<section>
<div>
<h1 class ="mainH1"><?php echo $lang['Ton permis de conduire en province'] ?></h1>
<h2 class="specialh2">Easier Cheaper Faster</h2>

</div>
</section>


