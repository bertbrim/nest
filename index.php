
<?php
// robot detection
if($_POST){
    $honeypot = trim($_POST["email"]);     
  
    if(!empty($honeypot)) {
      echo "BAD ROBOT!"; 
      exit;
    }
  }

if($_POST){
    $honeypot = trim($_POST["website"]);     
  
    if(!empty($honeypot)) {
      echo "BAD ROBOT!"; 
      exit;
    }
  }

if($_POST){
    $honeypot = trim($_POST["email_address"]);     
  
    if(!empty($honeypot)) {
      echo "BAD ROBOT!"; 
      exit;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nest - Responsive Bootstrap 4 Theme</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="bootstrap-4.1.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/lightbox.css">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">

<!--- Start Home Section -->
<div id="home">

<!--- Navigation -->
<nav class="navbar navbar-expand-md fixed-top">
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="img/nest.png" alt=""></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#portfolio">Portfolio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#testimonials">Testimonials</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contact">Contact</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<!--- End Navigation -->

<!--- Start Landing Page Image -->
<div class="landing">
	<div class="home-wrap">
		<div class="home-inner">
		</div>
	</div>
</div>
<!--- End Landing Page Image -->

<!--- Start Landing Page Caption -->
<div class="caption center-block text-center">
	<h3>Nest Responsive Bootstrap Theme</h3>
	<a class="btn btn-outline-light" href="#about">Get Started</a>
</div>
<!--- End Landing Page Caption -->

</div>
<!--- End Home Section -->

<!--- Start About Section -->
<div id="about" class="offset">

<!-- Jumbotron -->
<div class="jumbotron">
   <h3 class="heading">About</h3>
   <div class="heading-underline"></div>

<div class="row narrow">

    <div class="col-md-4">
        <div class="about text-center">
            <i class="fas fa-desktop fa-3x"></i>
            <h3>Full Screen Landing</h3>
            <p class="lead">Nest features a full screen, responsive landing page using Bootstrap.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="about text-center">
            <i class="fas fa-arrow-circle-down fa-3x"></i>
            <h3>Smooth Scrolling</h3>
            <p class="lead">The Nest Bootstrap navigation menu features smooth scrolling links.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="about text-center">
            <i class="fas fa-address-card fa-3x"></i>
            <h3>Contact Form</h3>
            <p class="lead">Using Bootstrap and PHP Mailer, Nest has a responsive contact form.</p>
        </div>
    </div>

    
</div> <!-- End Row -->
</div> <!-- End Jumbotron -->

<!-- End Jumbotron -->

</div>
<!--- End About Section -->

<!--- Start Portfolio Section -->
<div id="portfolio" class="offset">

<div class="container-fluid padding">

	<h3 class="heading">Portfolio</h3>
	<div class="heading-underline"></div>

<!--- Start Portfolio Grid -->

<div class="row no-padding">

	<div class="col-md-6">
		<div class="portfolio-item">
			<a href="img/portfolio/1.jpg" data-lightbox="example-set" data-title="My Portfolio Image Description">
				<img class="example-image" src="img/portfolio/1.png" alt="">
			</a>
		</div>
	</div>
	<div class="col-md-6">
		<div class="portfolio-item">
			<a href="img/portfolio/2.jpg" data-lightbox="example-set" data-title="My Portfolio Image Description">
				<img class="example-image" src="img/portfolio/2.png" alt="">
			</a>
		</div>
	</div>
	<div class="col-md-6">
		<div class="portfolio-item">
			<a href="img/portfolio/3.png" data-lightbox="example-set" data-title="My Portfolio Image Description">
				<img class="example-image" src="img/portfolio/3.png" alt="">
			</a>
		</div>
	</div>
	<div class="col-md-6">
		<div class="portfolio-item">
			<a href="img/portfolio/4.png" data-lightbox="example-set" data-title="My Portfolio Image Description">
				<img class="example-image" src="img/portfolio/4.png" alt="">
			</a>
		</div>
	</div>


</div> <!--- End Row -->

<!--- End Portfolio Grid -->

</div> <!--- End Container -->

<div class="narrow text-center padding">
	<p class="lead">Get in contact with us to see more of our great portfolio design work in addition to web development projects such as websites, apps and more!</p>
	<div class="center-block">
		<a class="btn btn-secondary" href="#contact">Get in Touch</a>
	</div>
</div>

</div>
<!--- End Portfolio Section -->

<!--- Start Testimonials Section -->
<div id="testimonials" class="offset">

<div class="jumbotron">
	<h3 class="heading">Testimonials</h3>
	<div class="heading-underline"></div>

<div class="row narrow">

	<div class="col-md-6">
		<div class="card text-center">
			<img class="card-img-top" src="img/testimonials/1.png" alt="">
			<div class="card-body">
				<h4>John Lee</h4>
				<h5>CEO,Company Inc.</h5>
				<p class="lead">"I have over 10 years of experience in technology and haven't come accross a better service."</p>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card text-center">
			<img class="card-img-top" src="img/testimonials/2.png" alt="">
			<div class="card-body">
				<h4>Jessica Miller</h4>
				<h5>President, Company Inc.</h5>
				<p class="lead">"I have over 10 years of experience in technology and haven't come accross a better service."</p>
			</div>
		</div>
	</div>
	
</div> <!--- End Row -->
</div> <!--- End Jumbotron -->



</div>
<!--- End Testimonials Section -->

<!--- Start Contact Section -->
<div id="contact" class="offset">

<div class="container-fluid footer">
<div class="row">
	<div class="col-md-5" id="bg">
		<img src="img/nest.png" alt="">
		<p>At our core is a collection of design and development solutions that represent everything your business needs to compete in the modern marketplace.</p>
		<strong>Our Location</strong>
		<p>100 Street Name <br>Our City, AA 10000</p>
		<p></p>
		<strong>Contact Info</strong>
		<p>(888) 888-888<br>email@nest.com</p>
		<a href="#"><i class="fab fa-facebook-square"></i></a>
		<a href="https://twitter.com/bertbrim" target="_blank"><i class="fab fa-twitter-square"></i></a>
		<a href="https://www.flickr.com/photos/pastorbrim/" target="_blank"><i class="fab fa-flickr"></i></a>
		<a href="https://www.instagram.com/bertbrim/" target="_blank"><i class="fab fa-instagram"></i></a>
	</div>

	<div class="col-md-7">
		<h3>Contact Us</h3>

		<form id="contact-form" method="post" action="contact.php">

			<div class="messages"></div>
			<div class="controls">

				<div class="form-group">
					<input id="form_name" type="text" name="name" class="form-control" placeholder="Enter Your Name." required="required">
				</div>

				<!--- Contact Form Update -->
					<input name="email" type="email" class="email"/>
					<input name="website" type="text" class="website"/>
					<input name="email_address" type="email" class="email_address"/>
				<!--- End Contact Form Update -->

				<div class="form-group">
					<input type="text" name="real_mail" class="form-control" placeholder="Enter your email." required="required">
				</div>	
				

				<div class="form-group">
					<textarea id="form_message" name="message" class="form-control" placeholder="Add Your Message." rows="4" required="required"></textarea>	
				</div>

				<input type="submit" class="btn btn-outline-light" value="send message">

			</div>

		</form>

	</div>

	<hr class="socket">
	&copy; Nest Theme 2018.
</div> <!--- End Row -->
</div> <!--- End Container Footer -->

</div>
<!--- End Contact Section -->


<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
<script src="js/custom.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/validator.js"></script>
<script src="js/contact.js"></script>
<!--- End of Script Source Files -->
</body>
</html>
