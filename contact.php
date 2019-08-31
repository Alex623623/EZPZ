

<!-- Contact -->
<section id="contact">
<h2>Une question? Contactez nous</h2>
	<div class="inner">
		<section>
		<form name="contact" action="https://formsubmit.co/ezpzpermis@gmail.com" method="POST">
				<div class="fields">
					<div class="field half">
						<label for="name">Nom</label>
						<input type="text" name="name" id="name" />
					</div>
					<div class="field half">
						<label for="email">Email</label>
						<input type="email" name="#" />
					</div>
					<div class="field half">
						<label for="telephone">Telephone</label>
						<input type="telephone" name="#" />
					</div>
					<div class="field">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="3"></textarea>
					</div>
				</div>
				<ul class="actions">
					<li><input type="submit" value="Send Message" ></li>
					<li><input type="reset" value="Clear" /></li>
				</ul>
			</form>
		
		</section>
		<section class="split">
			
		</section>
	</div>
</section>

<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
 
   $name = $_POST['name'];
   $email = $_POST['email'];
   $to = 'd0894b3432efc47ef4ac6b85d2f11735';    
   $subject = "New client";
   $body = '<html>
			 <body>
				<h2>Potential client</h2>
				<hr>
				<p>Name:<br>'.$name.'</p>
				<p>Email:<br>'.$email.'</p>
			</body>
			</html>';
	$headers = "From: ".$name." <".$email.">\r\n";
	$headers .= "Reply-to: ".$email."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset-utf-a";

	$send = mail($to, $subject, $body, $headers);
	if($send) {
		echo '<br>';
		echo 'Thanks for contacting us. I will be with you shortly.';
	} else {
		echo 'HUGE ERROR';
	}
}
	
?>

