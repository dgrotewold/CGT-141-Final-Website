<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wanderlust</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
	<link rel="icon" href="/CGT-141-Final-Website/img/icon.png">
	<link rel="icon" href="img/icon.png">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/javascript.js" type="text/javascript"></script>
	<!-- Website by David Grotewold, Juan Gonzalez-Laguan, Louis-Maximilian Hermann, Lina Lin, Luke Lutterbie & Chalabia Mahamat -->
</head>
<body>
	<!-- Page Container -->
	<div class="container-fluid p-0 bg-page">
		<!-- Navbar -->
		<?php include 'php/header.php'; ?>
		<!-- Jumbotron -->
		<div class="container p-0 position-relative bg-body">
			<video class="jumbotronvideo" muted preload="auto" autoplay loop>
				<source src="img/header.mp4" type="video/mp4">
			</video>
			<div class="position-absolute top-50 start-50 translate-middle text-white">
				<h1 class="display-1 mb-3 text-nowrap">Our Journey</h1>
				<a data-mdb-ripple-init class="btn btn-outline-light btn-lg rounded-5 border border-3 border-light d-flex justify-content-center" href="#target" role="button">Called to action?</a>

			</div>
		</div>
		<!-- <div class="text-center bg-image" style="
		background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
		height: 35em;
		background-size:cover;
	  ">
	  </div>
			<div class="position-absolute top-0 start-50 d-flex justify-content-center align-items-center h-100">
				<div class="text-white">
					<h1 class="heading-text mb-5">Heading</h1>
					<a data-mdb-ripple-init class="btn btn-outline-light btn-lg rounded-5 border border-3 border-light" href="#!" role="button">Call to action</a>
				</div>
			</div>
	</div> -->
		<!--Main Page Content -->
		<div class="container px-3 bg-light" id="target">
			<div class="container text-center p-5">
				<h2>Want to be up to date on all of our travel adventures?</h2>
				<a class="btn btn-lg btn-outline-dark px-5" href="pages/newsletter.php" role="button">Sign up for our newsletter</a>
			</div>
			<div class="container text-center p-5">
				<h2 class="">Travel Destinations</h2>
				<hr />
			</div>
			<!-- location columns. Abandon hope all ye who enter here -->
			<div class="row gx-5 equal-height-row">
				<div class="col text-center d-flex">
					<div class="p-3 border bg-light">
						<img src="img/Juan/9bd85b85-3eb0-45b3-8f13-35ab0355dff0-340004207.jpg" class="img-fluid" alt="Spain" />
						<h2 class="text-start">Spain</h2>
						<p class="text-start"> An aged country filled with history, culture, and revelry.  </p>
						<br />
						<p>by Juan Gonzalez</p>
						<a class="btn btn-lg btn-outline-dark px-5" href="pages/spain.html" role="button">More Information</a>
					</div>
				</div>
				<div class="col text-center d-flex">
					<div class="p-3 border bg-light">
						<img src="img/Luke/dubai6.png" class="img-fluid" alt="Dubai" />
						<h2 class="text-start">Dubai</h2>
						<p class="text-start"> A futuristic city of skylines, innovation, and luxury experiences. </p>
						<br />
						<p>by Luke Lutterbie</p>
						<a class="btn btn-lg btn-outline-dark px-5 justify-content-end" href="pages/dubai.html" role="button">More Information</a>
					</div>
				</div>
				<div class="col text-center d-flex">
					<div class="p-3 border bg-light">
						<img src="img/David/header.jpg" class="img-fluid" alt="Toronto" />
						<h2 class="text-start">Toronto</h2>
						<p class="text-start"> A sprawling city known for it's diversity and world-class culinary experiences.</p>
						<br />
						<p>by David Grotewold</p>
						<a class="btn btn-lg btn-outline-dark px-5" href="pages/toronto.html" role="button">More Information</a>
					</div>
				</div>
			</div>
			<br /> <br />
			<!-- row 2-->
			<div class="row gx-5">
				<div class="col text-center d-flex">
					<div class="p-3 border bg-light">
						<img src="img/Bia/header.jpg" class="img-fluid" alt="France" />
						<h2 class="text-start">France</h2>
						<p class="text-start"> A historic country with a rich heritage of art and fashion.</p>
						<br />
						<p>by Bia Mahamat</p>
						<a class="btn btn-lg btn-outline-dark px-5" href="pages/france.html" role="button">More Information</a>
					</div>
				</div>
				<div class="col text-center d-flex">
					<div class="p-3 border bg-light">
						<img src="img/Max/header.jpg" class="img-fluid" alt="Hong Kong" />
						<h2 class="text-start">Hong Kong</h2>
						<p class="text-start">An energetic city with rich culture and traditions.</p>
						<br/>
						<p>by Louis-Maximilian Hermann</p>
						<a class="btn btn-lg btn-outline-dark px-5" href="pages/hongkong.html" role="button">More Information</a>
					</div>
				</div>
				<div class="col text-center d-flex">
					<div class="p-3 border bg-light">
						<img src="img/Lina/header.jpg" class="img-fluid" alt="Chongqing" />
						<h2 class="text-start">Chongqing</h2>
						<p class="text-start"> A mountain metropolis where misty rivers, neon skylines, and bold flavors collide.</p>
						<p> by Lina Lin</p>
						<a class="btn btn-lg btn-outline-dark px-5" href="pages/chongqing.html" role="button">More Information</a>
					</div>
				</div>
			</div>
			<div class="container p-5">
				<blockquote class="blockquote text-center ">
					<h5 class="p-4">
						“Twenty years from now you will be more disappointed by the things that you didn’t do than by
						the ones you did do. So throw off the bowlines. Sail away from the safe harbor. Catch the
						trade winds in your sails. Explore. Dream. Discover.”
					</h5>
					<footer class="blockquote-footer">Mark Twain</footer>
				</blockquote>
			</div>
		</div>
		<!--Footer-->
		<?php include 'php/footer.php'; ?>
	</div>
</body>
</html>