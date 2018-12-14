<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- CSS Files -->
		<link rel="stylesheet" type="text/css" href="index.css" media="screen">
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:500|Nunito" rel="stylesheet">
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>
		<title>Bernina Gray | Welcome</title>
	</head>

		<!--navbar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav nav">
				<li class="nav-item-divider">
				<li class="nav-item active">
					<a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">PROJECTS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">ARTWORK</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about-me.php">ABOUT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">CONTACT</a>
				</li>
			</ul>
		</div>
	</nav>
	<!--Hero Section-->
	<div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url(img/lukachukai.jpg);">
	<!--Main Content-->
	<div class="d-lg-flex align-items-lg-center height-85vh--lg">
	<div class="container space-2 space-0--lg mt-lg-8">
		<div class="row justify-content-lg-between align-items-lg-center">
		</div>
	</div>
	</div>
	</div>
	<!--Projects-->
			<div class="container mt-5">
				<div class="row no-gutters">
				<div class="col-12 col-sm-6 col-md-8">
					<div class="text-white text-center d-none d-lg-block">
						<p>PROJECTS</p>
					</div>
				<div class="col-lg-6">
					<img class="img-thumbnail" src="img/russellMeans.jpg" alt="Russell Means - Coming Back AS Lightning Portrait">
				</div>
				</div>
			</div>
			</div>

		<!-- contact form -->


			<h4>Contact Me</h4>
		<div class="container-fluid">
			<form id="contact-bernina-form" action="php/mailer.php" method="post">
				<div class="form-group">
					<label for="contactName">Name <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="contactName" name="contactName" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="contactEmail">Email <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="contactSubject">Subject</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="contactSubject" name="contactSubject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="contactMessage">Message <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="contactMessage" name="contactMessage" placeholder="(2000 characters max)"></textarea>
					</div>
				</div>
				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6Ld3zHsUAAAAAMCnTe5bTf0nIl9ho-hmKE6meKi1"></div>
				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>

			<!--Footer-->
			<div class="modal-footer justify-content-center">
				<span class="mr-4"></span>
				<!--Github +-->

				<!--Twitter-->
				<a type="button" class="btn-floating btn-sm btn-tw"><i class="fa fa-twitter"></i></a>
				<!--Linkedin-->
				<a type="button" class="btn-floating btn-sm btn-ins"><i class="fa fa-linkedin"></i></a>

				<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

			</div>

			<!--empty area for form error/success output-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</div>
	</body>
</html>