<!DOCTYPE html>
<html lang="en">

<head>
	<title>Our Blog - Sip'nSniff</title>

	<!-- Insert webpage meta sections -->
	<?php
		echo file_get_contents("meta/head.php");
	?>

	<!-- Control webpage schema content -->
	<script type="application/ld+json">
		[{
				"@context": "https://schema.org/",
				"@type": "BlogPosting",
				"position": 1,
				"headline": "Where is our air from?",
				"url": "https://sipnsniff.com/blog.html/#where-is-our-air-from",
				"author": {
					"@type": "Person",
					"name": "Jordyn Gardinal"
				},
				"publisher": {
					"@type": "Organization",
					"name": "Sip'nSniff",
					"url": "https://sipnsniff.com"
				},
				"datePublished": "2021-11-01T00:00:00"
			},
			{
				"@context": "https://schema.org/",
				"@type": "BlogPosting",
				"position": 2,
				"headline": "Why bottled air?",
				"url": "https://sipnsniff.com/blog.html/#why-bottled-air",
				"author": {
					"@type": "Person",
					"name": "Ashley Goldstein"
				},
				"publisher": {
					"@type": "Organization",
					"name": "Sip'nSniff",
					"url": "https://sipnsniff.com"
				},
				"datePublished": "2021-10-27T00:00:00"
			},
			{
				"@context": "https://schema.org/",
				"@type": "BlogPosting",
				"position": 3,
				"headline": "We are Sip'nSniff!",
				"url": "https://sipnsniff.com/blog.html/#we-are-sipnsniff",
				"author": {
					"@type": "Person",
					"name": "Jordyn Gardinal"
				},
				"publisher": {
					"@type": "Organization",
					"name": "Sip'nSniff",
					"url": "https://sipnsniff.com"
				},
				"datePublished": "2021-10-24T00:00:00"
			}
		]
	</script>
</head>

<body>
	<!-- Webpage header navbar -->
	<header>
		<?php
			echo file_get_contents("meta/nav.php");
		?>
	</header>

	<!-- Blog articles -->
	<section id="blog">
		<div class="container pt-5">
			<h2>Sip'nSniff Blog</h2>
			<!-- Blog post 3 -->
			<article id="where-is-our-air-from">
				<?php
					echo file_get_contents("blog/2021-11-01_1.php");
				?>
			</article>
			<!-- Blog post 2 -->
			<article id="why-bottled-air">
				<?php
					echo file_get_contents("blog/2021-10-27_1.php");
				?>
			</article>
			<!-- Blog post 1 (oldest) -->
			<article id="we-are-sipnsniff">
				<?php
					echo file_get_contents("blog/2021-10-24_1.php");
				?>
			</article>
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