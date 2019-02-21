<?php 
	$page = "contacts";
	$title = "Reiki Edinburgh & Dundee | Meditation & Mindfulness | Classes & Sessions";
	$metaD = "Reiki Classes | Reiki Training in Edinburgh | Meditation Sessions in Edinburgh | Mindfulness Sessions in Edinburgh | Mindfulness Training in Edinburgh";

	/* Header */
	include 'inc/header.php';
?>

		<div class="contact">
			<h1>Contact Us</h1>
		</div>
		<div class="contact-icons">
			<div class="bookings">
				<div class="fa-stack fa-6x">
					<a href="https://audreyhird.setmore.com">
						<i class="far fa-circle fa-stack-2x"></i>
						<i class="fa fa-book fa-stack-1x" aria-hidden="true"></i>
					</a>
				</div>
				<div>
					<h3>BOOKINGS</h3>
				</div>
			</div>

			<!-- Phone -->
			<div class="phone">
				<div class="fa-stack fa-6x">
					<i class="far fa-circle fa-stack-2x"></i>
					<i class="fa fa-phone fa-stack-1x fa-flip-horizontal" aria-hidden="true"></i>
				</div>
				<div>
					<h3>+44 7738 272558</h3>
				</div>
			</div>

			<!-- Mail -->
			<div class="mail">
				<div class="fa-stack fa-6x">
					<i class="far fa-circle fa-stack-2x"></i>
					<i class="fa fa-envelope fa-stack-1x" aria-hidden="true"></i>
				</div>
				<div>
					<h3>info@audreyhird.co.uk</h3>
				</div>
			</div>

			<!-- Address -->
			<div class="address">
				<div class="fa-stack fa-6x">
					<i class="far fa-circle fa-stack-2x"></i>
					<i class="fa fa-home fa-stack-1x" aria-hidden="true"></i>
				</div>
				<div>
					<h3>Breath Works, 7a Alva Street, Edinburgh,EH2 4PH</h3>
				</div>
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

<!-- Footer -->
<?php 
	include 'inc/footer.php';
?>