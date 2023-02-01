<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JobQ</title>

	<!-- CSS File -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<!-- JS File -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>

	<!-- Navbar Start -->
	<?php
	$this->load->view('template/navbar');
	?>
	<!-- Navbar End -->

	<!-- Main body start -->

	<main>
		<section class="main-content">
			<div class="container">
				<div class="slider mt-5">
					<div class="d-flex justify-content-center">
						<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="assets\image\default.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="assets\image\default.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="assets\image\default.jpg" class="d-block w-100" alt="...">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- Main body end -->

</body>

</html>
