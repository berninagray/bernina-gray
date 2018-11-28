<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<!-- CSS Files -->
			<link rel="stylesheet" type="text/css" href="main.css" media="screen">

			<!-- Google font -->
			<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">

			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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

			<title>Bernina Gray Portfolio</title>
		</head>
	<body>
			<!-- header -->
		<header class="header">
			<div class="navbar-container">
				<nav class="navbar navbar-expand-lg fixed-top ">
					<a class="navbar-brand" href="#">Home</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse " id="navbarSupportedContent">
						<ul class="navbar-nav mr-4">
							<li class="nav-item">
								<a class="nav-link" data-value="about" href="#">About</a></li>
							<li class="nav-item">
								<a class="nav-link " data-value="portfolio"href="#">Portfolio</a></li>
							<li class="nav-item">
								<a class="nav-link " data-value="contact" href="#">Contact</a>       </li>
						</ul>
					</div></nav>
			</div>
		</header>

		<!--jumbotron -->
		<div class="container p-3">
		<div class="container jumbotron mt-5">
			<div class="container">
				<h1 class="display-4">Welcome</h1>
				<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
			</div>
		</div>
		</div>
		<div class="container">
			<div class="row mb-2">
				<div class="col">
					<div class="card flex-md-row mb-4 shadow-sm h-md-250">
						<div class="card-body d-flex flex-column align-items-start">
							<h3 class="mb-0">
								<a class="text-dark" href="#">Featured post</a>
							</h3>
							<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<a href="#">Continue reading</a>
						</div>
						<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/lukachukai.jpg" data-holder-rendered=true">
					</div>
				</div>
		</div>
		<div>
			<div class="row mb-2">
				<div class="col">
					<div class="card flex-md-row mb-4 shadow-sm h-md-250">
						<div class="card-body d-flex flex-column align-items-start">
							<h3 class="mb-0">
								<a class="text-dark" href="#">Featured post</a>
							</h3>
							<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<a href="#">Continue reading</a>
						</div>
						<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/lukachukai.jpg" data-holder-rendered=true">
					</div>
				</div>
			</div>
			<div>
				<div class="row mb-2">
					<div class="col">
						<div class="card flex-md-row mb-4 h-md-250">
							<div class="card-body d-flex flex-column align-items-start">
								<h3 class="mb-0">
									<a class="text-dark" href="#">Featured post</a>
								</h3>
								<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
								<a href="#">Continue reading</a>
							</div>
							<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/lukachukai.jpg" data-holder-rendered=true">
						</div>
					</div>
				</div>
				<!-- contact form -->
		<div class="container">
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
			<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</form>

		<!--empty area for form error/success output-->
			<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>
			<script type="text/javascript" src='js/form-validate.js'></script>
	</body>
</html>