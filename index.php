<!--<?php
//error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
	
	// require a name from user
	if(trim($_POST['contactName']) === '') {
		$nameError =  'Forgot your name!'; 
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}
	
	// need valid email
	if(trim($_POST['email']) === '')  {
		$emailError = 'Forgot your e-mail address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'Invalid email address!';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	// we need at least some content
	if(trim($_POST['comments']) === '') {
		$commentError = 'Forgot your message!';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}
		
	// upon no failure errors let's email now!
	if(!isset($hasError)) {
		
		$emailTo = 'lobosvega@me.com'; // ADD YOUR EMAIL ADDRESS HERE FOR CONTACT FORM!
		$subject = 'Submitted message from '.$name; // ADD YOUR EMAIL SUBJECT LINE HERE FOR CONTACT FORM!
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
		$emailSent = true;
	}
}
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lobos Vega</title>
    <link rel = "shortcut icon" href="./assets/images/favicon_io/favicon.ico">
    <link rel = "stylesheet" href="./bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href="./assets/css/style.css">
    <link rel = "stylesheet" href="./assets/css/animate.css">
    <link rel = "stylesheet" href="./assets/css/arrow.css">
    <link rel = "stylesheet" href="./assets/css/fixed.css">
    <link rel = "stylesheet" href="./assets/css/lightbox.css">
    <link rel = "stylesheet" href="./assets/css/waypoints.css">
</head>
<body>
<body data-spy="scroll" data-target="#navbarResponsive">
<!--- Start Home Section -->
<div id="home"> 
<!--- Start NAV Section -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
       <!-- <a class="navbar-brand" href="#"><img src="/assets/images/favicon_io/favicon-32x32.pngg" alt="LV"></a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--- End NAV Section -->

<!--- start Landing Page image -->
<div class="landing">
    <div class="home-wrap">
        <div class="home-inner">   
        </div>
    </div>
</div>

<!--- End landing page image -->

<!--- start Landing Page caption -->
<div class="caption center-block text-center">
    <div class="os-animation" data-animation="fadeIn" data-delay=".6s">
        <h1>WELCOME</h1>
    </div>
    <div class="os-animation" data-animation="fadeIn" data-delay=".8s">
        <h3>to my portfolio</h3>
    </div>
    <div class="os-animation" data-animation="fadeIn" data-delay=".8s">
            <h4>...</h4>
        </div>
</div>
<!--- end Landing Page caption -->
    <!--- bouncing arrow -->
        <a class="down_arrow" href="#features">
            <div class="arrow bounce d-none d-sm-block">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </div>    
        </a>
</div>
<!--- End Home Section -->

<!--- Start ABOUT Section -->
<div id="features" class="offset">

<!--start of the animation-->
<div class="os-animation" data-animation="fadeInUp">
    <div class="narrow text-center">
        <div class="col-12">
            <h1>J. Lobos Vega</h1>
            <p class="lead">Fashion stylist turned Full-Stack developer. </p>
            <a class="btn btn-turqouise btn-sm" href="#portfolio">Fashion Portfolio</a>
        </div>
    </div>
</div>
<!--end of the animation-->

<!--end jumbrotron-->

<!--End Features Section -->

<!--- Start Portfolio Section -->
<div id="portfolio" class="offset">

<div class="row padding">

	<div class="col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Dev. Portfolio</h3>
		<div class="heading-underline"></div>
	</div>

</div> <!--- End Row -->

<!--- Start Portfolio Grid -->
<div class="container-fluid">
<div class="row no-padding">
	
	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInLeft" data-delay=".2s">
		<div class="portfolio-item">
			<a href="assets/images/portfolio/1.png" data-lightbox="example-set" data-title="My Portfolio Image Description">
				<img class="example-image" src="assets/images/portfolio/1.png" alt="">
			</a>
		</div>
	</div>
    </div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInLeft">
		<div class="portfolio-item">
			<a href="assets/images/portfolio/2.png" data-lightbox="example-set">
				<img class="example-image" src="assets/images/portfolio/2.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInRight">
		<div class="portfolio-item">
			<a href="assets/images/portfolio/3.png" data-lightbox="example-set">
				<img class="example-image" src="assets/images/portfolio/3.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInRight" data-delay=".2s">
		<div class="portfolio-item">
			<a href="assets/images/portfolio/4.png" data-lightbox="example-set">
				<img class="example-image" src="assets/images/portfolio/4.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInLeft" data-delay=".2s">
		<div class="portfolio-item">
			<a href="assets/images/portfolio/5.png" data-lightbox="example-set">
				<img class="example-image" src="assets/images/portfolio/5.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInLeft">
		<div class="portfolio-item">
			<a href="assets/images/portfolio/6.png" data-lightbox="example-set">
				<img class="example-image" src="assets/images/portfolio/6.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInRight">
		<div class="portfolio-item">
			<a href="assets/images/portfolio/7.png" data-lightbox="example-set">
				<img class="example-image" src="assets/images/portfolio/7.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInRight" data-delay=".2s">
		<div class="portfolio-item">
			<a href="assets/images/portfolio8.png" data-lightbox="example-set">
				<img class="example-image" src="assets/images/portfolio/8.png" alt="">
			</a>
		</div>
	</div>
	</div>

</div> <!--- End Row -->
</div> <!--- End Container -->
<!--- End Portfolio Grid -->

<div class="os-animation" data-animation="fadeInUp">
<div class="narrow text-center">
	<div class="col-12">
		<p class="lead">Get in contact with us to see more of our great portfolio design work in addition to web development projects such as websites, apps and more!</p>
	</div>
</div>
</div>

</div>
<!--- End Portfolio Section -->

<!--- Start Skills Section -->
<div id="skills" class="offset">
	
<!--- Start Jumbotron -->
<div class="jumbotron">
	<div class="narrow">
	
		<div class="col-12 os-animation" data-animation="fadeInUp">
			<h3 class="heading">MAD SKILLS</h3>
			<div class="heading-underline"></div>
		</div>
	
		<div class="os-animation" data-animation="fadeInUp">
		<div class="row text-center">
	
			<div class="col-sm-6 col-md-3">
				<div class="skill">
					<span class="fa-layers fa-4x">
						<i class="fas fa-clock"></i>
					</span>
					<h3><span class="counter">100</span></h3>
					<p>CHARISMA</p>
				</div>
			</div>
	
			<div class="col-sm-6 col-md-3">
				<div class="skill">
					<span class="fa-layers fa-4x">
						<i class="fab fa-codepen"></i>
					</span>
					<h3><span class="counter">100</span></h3>
					<p>UNIQUENESS</p>
				</div>
			</div>
	
			<div class="col-sm-6 col-md-3">
				<div class="skill">
					<span class="fa-layers fa-4x">
						<i class="fas fa-users" data-fa-transform="left-2"></i>
					</span>
					<h3><span class="counter">100</span></h3>
					<p>NERVE</p>
				</div>
			</div>
	
			<div class="col-sm-6 col-md-3">
				<div class="skill">
					<span class="fa-layers fa-4x">
						<i class="fas fa-cloud-download-alt" data-fa-transform="left-1"></i>
					</span>
					<h3><span class="counter">100</span></h3>
					<p>TALENT</p>
				</div>
			</div>
	
		</div> <!--- End of Row -->
		</div> <!--- End of Animation -->
	
		<div class="os-animation" data-animation="fadeInUp">
		<div class="narrow text-center">
			<div class="col-12">
				<p class="lead">Want to learn more about my design and development skills?</p>
			</div>
		</div>
	</div>
	
</div> <!--- End Narrow -->
</div> <!--- End Jumbotron -->
	
</div>
<!--- End Skills Section -->


<!--- Start Contact Section -->
<div id="contact" class="offset">

		<footer>
		<div class="row">
		
			<div class="col-md-5">
				<br><br><br>
				<br><br><br>
				<strong>Contact Info</strong>
				<br>lobosvega@me.com</p>
				<a href="#"><i class="fab fa-facebook-square"></i></a>
				<a href="#"><i class="fab fa-twitter-square"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-linkedin"></i></a>
			</div>
		
	<div class="col-md-7">
		<h3>Contact</h3>
		
		<form id="contact-form" method="post" action="contact.php">
		
	<div class="messages"></div>
	<div class="controls">
		
	<div class="form-group">
		<input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your name." required="required">
	</div>
		
	<div class="form-group">
		<input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email." required="required">
	</div>
		
	<div class="form-group">
		<textarea id="form_message" name="message" class="form-control" placeholder="Add your message." rows="4" required="required"></textarea>
	</div>
		
		<input type="submit" class="btn btn-outline-light btn-sm" value="Send message">
		
	</div>
		
	</form>
		
	</div>
		
	<hr class="socket">
	&copy; LobosVega
		
</div> 
<!--- End of Row -->
</footer> 
<!--- End of Footer -->
</div>
<!--- End Contact Section -->
<!--- Top Scroll -->
<a href="#home" class="top-scroll">
	<i class="fas fa-angle-up"></i>
</a>
<!--- End of Top Scroll -->
		
    
    <!--- Script Source Files -->
<script src="assets/javascript/jquery-3.3.1.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="assets/javascript/contact.js"></script>
<script src="assets/javascript/custom.js"></script>
<script src="assets/javascript/jquery.counterup.js"></script>
<script src="assets/javascript/jquery.waypoints.min.js"></script>
<script src="assets/javascript/lightbox.js"></script>
<script src="assets/javascript/validator.js"></script>
<script src="assets/javascript/waypoints.js"></script>
<!--- End of Script Source Files -->

</body>
</html>