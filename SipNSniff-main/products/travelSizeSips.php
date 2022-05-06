<!DOCTYPE html>
<html lang="en">

<head>
	<title>Travel Sips Canister - Sip'nSniff</title>

	<!-- Insert webpage meta sections -->
	<?php
		echo file_get_contents("../meta/head.php");
	?>
</head>

<body>
	<!-- Webpage header navbar -->
	<header>
		<?php
			echo file_get_contents("../meta/nav.php");
		?>
	</header>

	<section id="product">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-12 col-lg-5">
					<section id="productImage">
						<img class="d-block img-fluid rounded" src="/img/canisterTravel.jpg" alt="Sip'nSniff Travel Size Air Canister, 6 ounces">
					</section>
				</div>
				<div class="col-12 col-lg-7">
					<h2>Sips Canister</h2>
					<h4>Travel Size 6oz.</h4>
					<h1 class="mt-4">$6.99</h1>
					<a href="#" class="btn btn-primary mt-4"><h4>Add to Cart</h4></a>
					<div class="mt-2">
						<a class="btn btn-primary" href="mailto:?subject=Shared to you: Sip'nSniff&amp;body=Check out these products from Sip'nSniff!%0Ahttps://sipnsniff.com" target="_blank"><i class="material-icons-outlined">alternate_email</i> Email</a>
						<a class="btn btn-primary" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsipnsniff.com" target="_blank"><i
							class="fab fa-facebook-f"></i> Share</a>
						<a class="btn btn-primary" href="https://twitter.com/intent/tweet?url=https://sipnsniff.com&text=Check out these products from Sip'nSniff!" target="_blank"><i
							class="fab fa-twitter"></i> Tweet</a>
					</div>
					<p class="mt-4">
						Our classic sips canister transformed into a mini, travel sized one! Need to take one with you around the world, this canister is perfect for you. It can fit right into your luggage with no hassle. Enjoy a variety of scents and flavors that are refreshing and easy to carry.
						<ul>
							<li>Rush</li>
							<li>Serenity</li>
							<li>Floral</li>
							<li>Tropical</li>
							<li>Sanctuary</li>
							<li>Citrus</li>
							<li>Herbal</li>
							<li>Spice</li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Webpage footer section -->
	<footer>
		<?php
			echo file_get_contents("../meta/footer.php");
		?>
	</footer>
</body>