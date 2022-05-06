<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shop Bottled Air - Sip'nSniff</title>

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

	<section id="shop">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-12">
					<h2>Shop Sip'nSniff</h2>
				</div>
				<div class="col-12 col-md-3 col-lg-2 mt-3 mt-md-4">

					<div class="row">
						<div class="col-12">
							<p class="mb-0 mt-1"><strong>Shop All</strong></p>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
						<a href=""><span class="badge rounded-pill bg-warning btn">All Products</span></a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p class="mb-0 mt-1"><strong>Products</strong></p>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#sips"><span class="badge rounded-pill bg-primary btn">Sips Canisters</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#sniffs"><span class="badge rounded-pill bg-primary btn">Sniffs Fusers</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#accessories"><span class="badge rounded-pill bg-primary btn">Accessories</span></a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p class="mb-0 mt-1"><strong>Scents and Flavors</strong></p>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#rush"><span class="badge rounded-pill bg-success btn">Rush</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#serenity"><span class="badge rounded-pill bg-success btn">Serenity</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#floral"><span class="badge rounded-pill bg-success btn">Floral</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#tropical"><span class="badge rounded-pill bg-success btn">Tropical</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#sanctuary"><span class="badge rounded-pill bg-success btn">Sanctuary</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#citrus"><span class="badge rounded-pill bg-success btn">Citrus</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#herbal"><span class="badge rounded-pill bg-success btn">Herbal</span></a>
						</div>
						<div class="col-auto col-md-12 pr-0 pb-1">
							<a href="#spice"><span class="badge rounded-pill bg-success btn">Spice</span></a>
						</div>
					</div>

				</div>
				<div class="col-12 col-md-9 col-lg-10">
					<div class="row">

						<div class="col-12 col-sm-6 col-lg-4">
							<div class="card">
								<img src="img/canisterSmall.jpg" class="card-img-top" alt="Sip'nSniff Air Canister, 8 ounces">
								<div class="card-body">
									<h5 class="card-title">Sips Canister - Standard 8oz.</h5>
									<p class="card-text">$10.99</p>
									<a href="products/sipsCanister8oz.php" class="btn btn-primary">See More</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="card">
								<img src="img/canisterTravelSmall.jpg" class="card-img-top" alt="Sip'nSniff Travel Size Air Canister, 6 ounces">
								<div class="card-body">
									<h5 class="card-title">Sips Canister - Travel Size 6oz.</h5>
									<p class="card-text">$6.99</p>
									<a href="products/travelSizeSips.php" class="btn btn-primary">See More</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="card">
								<img src="img/fuser.jpg" class="card-img-top" alt="Sip'nSniff Scented Plug-in, 2 ounces">
								<div class="card-body">
									<h5 class="card-title">Sniffs Fusers - Plug-in</h5>
									<p class="card-text">$14.99</p>
									<a href="products/sniffsFuser.php" class="btn btn-primary">See More</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="card">
								<img src="img/travelFuser.jpg" class="card-img-top" alt="Sip'nSniff Scented Car Clip, 1 ounce">
								<div class="card-body">
									<h5 class="card-title">Sniffs Fusers - On the Go!</h5>
									<p class="card-text">$9.99</p>
									<a href="products/sniffsFuserOTG.php" class="btn btn-primary">See More</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="card">
								<img src="img/brushesSmall.jpg" class="card-img-top" alt="Sip'nSniff Cleaning Brush Kit">
								<div class="card-body">
									<h5 class="card-title">Cleaning Brush Kit</h5>
									<p class="card-text">$9.99</p>
									<a href="products/cleaningSet.php" class="btn btn-primary">See More</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="card">
								<img src="img/nozzle.jpg" class="card-img-top" alt="Sip'nSniff Canister Breathing Nozzle">
								<div class="card-body">
									<h5 class="card-title">Breathing Nozzle</h5>
									<p class="card-text">$6.99</p>
									<a href="products/breathingNozzle.php" class="btn btn-primary">See More</a>
								</div>
							</div>
						</div>
					</div>
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