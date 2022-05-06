<!DOCTYPE html>
<html lang="en">

<head>
	<title>Our Story - Sip'nSniff</title>

	<!-- Insert webpage meta sections -->
	<?php
		echo file_get_contents("meta/head.php");
	?>
</head>

<body>
	<!-- Webpage header navbar -->
	<header>
		<?php
			echo file_get_contents("meta/nav.php");
		?>
	</header>

	<!-- Story introduction -->
	<section id="story">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-12 col-md-5">
					<img class="rounded" src="img/reflection.png">
				</div>
				<div class="col-12 col-md-7 mt-4 mt-md-0">
					<h2>Who Are We?</h2>
					<p>We are Sip’nSniff, your local premium bottled air provider in Lakeland, Florida. We offer a
						wide variety of products, from portable canisters to travel-sized fusers. Sip’nSniff is
						run by two women who want to bring the refreshments of all over the world into your home,
						hands, and body.</p>
				</div>
				<div class="col-12 mt-md-4">
					<h2>What We Do</h2>
					<p>Our goal is to bring the natural aesthetic of Earth to your door without a hassle. The bottled air we create is guaranteed to be premium and won’t disappoint.</p>
					<h2>Why Sip'nSniff?</h2>
					<p>Have you ever wanted to find other ways to destress or take a break from reality in a healthy, organic way? Our bottled air is guaranteed to do just that, if not more!</p>
					<h2>Our Sources</h2>
					<p>From the clean, cool taste of Rush, compressed and gathered from the foot of the majestic Alps in Switzerland, to the world's cleanest coasts off the beautiful beaches of Puerto Rico with Serenity.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Webpage footer section -->
	<footer>
		<?php
			echo file_get_contents("meta/footer.php");
		?>
	</footer>
</body>

</html>