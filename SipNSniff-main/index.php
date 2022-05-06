<!DOCTYPE html>
<html lang="en">

<head>
	<title>Premium Bottled Air - Sip'nSniff</title>

	<!-- Insert webpage meta sections -->
	<?php
		echo file_get_contents("meta/head.php");
	?>

	<!-- Webpage schema content -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "HealthAndBeautyBusiness",
			"name": "Sip'nSniff",
			"brand": "Sip'nSniff",
			"url": "https:/sipnsniff.com",
			"image": "img/abouttemp.jpg",
			"email": "contact.sipnsniff@gmail.com",
			"telephone": "(863) 555-0103",
			"location": {
				"@type": "PostalAddress",
				"addressRegion": "FL",
				"addressLocality": "Lakeland"
			},
			"areaServed": {
				"@type": "GeoShape",
				"addressCountry": "US"
			},
			"founder": [{
					"@type": "Person",
					"name": "Ashley Goldstein"
				},
				{
					"@type": "Person",
					"name": "Jordyn Gardinal"
				}
			],
			"foundingDate": "2021-10-13T00:00:00"
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org/",
			"@type": "Product",
			"name": "Portable Bottled Air",
			"description": "Sip'nSniff's Premium Bottled Air",
			"url": "https://sipnsniff.com/shop.html",
			"manufacturer": "Sip'nSniff",
			"color": "Clear",
			"countryOfAssembly": "United States",
			"offers": {
				"@type": "Offer",
				"availability": "https://schema.org/PreOrder",
				"price": "19.99",
				"priceCurrency": "USD"
			}
		}
	</script>
</head>

<body>
	<div>
		<!-- Webpage header navbar -->
		<header>
			<?php
				echo file_get_contents("meta/nav.php");
			?>
		</header>

		<!-- Hero carousel -->
		<section id="hero">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block img-fluid" src="img/mountain.jpg" alt="mountain scene">
						<div class="carousel-caption d-none d-md-block">
							<h5>Sip'nSniff, your local premium air company!</h5>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="img/forest.jpg" alt="forest scene">
						<div class="carousel-caption d-none d-md-block">
							<h5>Bring outdoor refreshments to your home, hands, and body!</h5>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="img/stream.png" alt="stream scene">
						<div class="carousel-caption d-none d-md-block">
							<h5>Browse our products today!</h5>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>

		<!-- Featured products -->
		<section id="feature">
			<div class="container">

				<div class="card text-left">
					<div class="card-body row">
						<div class="col-6">
							<img class="d-block img-fluid card-img" src="/img/lavendarField.jpg" alt="lavendar field product">
						</div>
						<div class="col-6">
							<h5 class="card-title">New Scent</h5>
							<p class="card-text">Try our brand new scent called Sanctuary. Enjoy a blend of relaxing and destressing scents such as lavender, clove, and blue sage. </p>
							<a href="shop.php" class="btn btn-primary">See Products</a>
						</div>
					</div>
				</div>

				<div class="card text-right">
					<div class="card-body row">
						<div class="col-6">
							<h5 class="card-title">Coming Soon - Niagra Falls</h5>
							<p class="card-text">Experience the refreshments of the magestic Niagra Falls.</p>
							<a href="shop.php" class="btn btn-primary">See Other Products</a>
						</div>
						<div class="col-6">
							<img class="d-block img-fluid card-img" src="/img/niagaraFalls.jpg" alt="niagara falls">
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
	</div>
</body>

</html>