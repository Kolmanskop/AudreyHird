<?php 
	$page = "contacts";
	$title = "Reiki Edinburgh & Dundee | Meditation & Mindfulness | Classes & Sessions";
	$metaD = "Reiki Classes | Reiki Training in Edinburgh | Meditation Sessions in Edinburgh | Mindfulness Sessions in Edinburgh | Mindfulness Training in Edinburgh";

	include 'inc/header.php';
?>

		<div class="contact">
			<h1>Contact Us</h1>
		</div>
		<div class="contact-icons">
			<div>
			<a href="https://audreyhird.setmore.com"><i class="fa fa-book" aria-hidden="true"></i></a>
			</div>
			<div>
				<h3>BOOKINGS</h3>
			</div>
		</div>
		<section class="contactform">
		<p>Send E-Mail</p>
		<form action="contact-form" action="contactform.php" method="post">
			<input type="text" name="name" placeholder="Full name">
			<input type="text" name="mail" placeholder="Email Address">
			<input type="text" name="subject" placeholder="Subject">
			<textarea name="message" placeholder="Type your message here... "></textarea>
			<button type="submit" name="submit">SEND Mail</button>
		</form>
		</section>

<?php 
	include 'inc/footer.php';
?>