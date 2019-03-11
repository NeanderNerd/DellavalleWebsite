		
		<!-- conditional include for carousel-->
		<?php
		if($x == 1){
			include 'carousel.php';
		}
		else {
			include 'picture.php';
		}
		?>
		<div class="container-fluid" style="background-color: #564a34;">
			<nav class="navbar navbar-dark" style="background-color: #564a34;">
				<a class="navbar-brand" href="#" style="color: #aba59a;" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<img src="favicon.ico" width="30" height="30" alt="">
					Menu
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<div class="navbar-nav mr-auto">
						<a class="nav-item nav-link" href="index.php">Home</a>
						<a class="nav-item nav-link" href="aboutus.php">About Us</a>
						<a class="nav-item nav-link" href="whatwedo.php">What We Do</a>
						<a class="nav-item nav-link" href="services.php">Services</a>
						<a class="nav-item nav-link" href="analyticalcatalog.php">Analytical Catalog</a>
						<a class="nav-item nav-link" href="accreditation.php">Accreditation</a>
						<a class="nav-item nav-link" href="Samplingguide.php">Sampling Guide</a>
						<a class="nav-item nav-link" href="employment.php">Employment</a>
						<a class="nav-item nav-link" href="forms.php">Forms</a>
						<a class="nav-item nav-link" href="shipping-instructions.php">Shipping Instructions</a>
						<a class="nav-item nav-link" href="contactus.php">Contact Us</a>
						<a class="nav-item nav-link" href="map.php">Map</a>
					</div>
				</div>
			</nav>
		</div>