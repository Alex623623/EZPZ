<?php
include ("../nav.php");
require_once 'classes/entry.php';

?>

<!-- Main -->
<div id="main">
<head>
		<title>Blog ton permis</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/normalize.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		
</head>
	  <h1>uno</h1>
	  <?php

?>					
<?php 
$query = 'SELECT * FROM entries ORDER BY entry_id DESC LIMIT 7;';
require_once('classes/dbh.php');
$dbh = new Dbh();
$rows = $dbh->executeSelect($query);
// print_r($rows);
foreach ($rows as $row) {
	// $entry = new Entry();
	// $entry->setByRow($row); 
	// print_r($row);
?>
	<article class="post">
		<header>
		<div class="title">
			<h2><a href="single.php?entry_id=<?php echo $row['entry_id']; ?>"><?php echo $row['entry_title']; ?></a></h2>
		</div>
		<div class="meta">
			<time class="published"><?php echo $row['entry_date']; ?></time>
			<!-- <a href="#" class="author"><span class="name">> -->
			<!-- <?php echo $row['post_author']; ?> -->
			<!-- </span><img src="../images/driver1.jpg" alt="" /></a> -->
		</div>
										

		<div class="excerpt">
			<?php echo $row['entry_excerpt']; ?>
		</div>
		
		<footer>
			<ul class="actions">
				<li><a href="#" class="button big">Continue Reading</a></li>
			</ul>
			<ul class="stats">
				<li><a href="#">General</a></li>
				<li><a href="#" class="icon fa-heart">28</a></li>
				<li><a href="#" class="icon fa-comment">128</a></li>
			</ul>
		</footer>
	</article>

<?php } ?>
				
		
	<!-- Pagination -->
	<ul class="actions pagination">
		<li><a href="" class="disabled button big previous">Previous Page</a></li>
		<li><a href="#" class="button big next">Next Page</a></li>
	</ul>

</div>

	<!-- Sidebar -->
	<section id="sidebar">

	<!-- Intro -->
	<section id="intro">
		<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
		<header>
			<h2>Future Imperfect</h2>
			<p>Another fine responsive site template</p>
		</header>
	</section>

	<!-- Mini Posts -->
	<section>
		<div class="mini-posts">
	<!-- Mini Post -->
			<article class="mini-post">
				<header>
					<h3><a href="#">Vitae sed condimentum</a></h3>
					<time class="published" datetime="2015-10-20">October 20, 2015</time>
					<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
				</header>
					<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
			</article>

	<!-- Mini Post -->
			<article class="mini-post">
				<header>
					<h3><a href="create.php">create a post</a></h3>
					
				</header>
					
			</article>
		</div>
	</section>

	<!-- Posts List -->
	<section>
		<ul class="posts">
			<li>
				<article>
					<header>
						<h3><a href="#">Lorem ipsum fermentum ut nisl vitae</a></h3>
						<time class="published" datetime="2015-10-20">October 20, 2015</time>
					</header>
						<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
				</article>
			</li>
			<li>
				<article>
					<header>
						<h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
						<time class="published" datetime="2015-10-15">October 15, 2015</time>
					</header>
						<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
				</article>
			</li>
		</ul>
	</section>

	<!-- About -->
		<section class="blurb">
			<h2>About</h2>
				<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
					<ul class="actions">
						<li><a href="#" class="button">Learn More</a></li>
					</ul>
		</section>
		<?php 
		 include ("../footer.php");
	?>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>





	<!-- <!DOCTYPE html> Avis/ Comments
<html>
<body>

<p>Click the button to create, and add, a comment to the HTML document.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
  var c = document.createComment("My personal comments");
  document.body.appendChild(c);
  var x = document.getElementById("demo");
  x.innerHTML = "A comment was added to this document, but as you know, comments are invisible.";
}
</script>

</body>
</html> -->