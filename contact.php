<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include 'includes/import.php'; ?>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="row bg-light p-2 mx-0">
		<div class="col-md-5">
			Get Variety of GYM prodcuts and Supplements. 
			<a href="#" class="text-warning mx-2">Order Now
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
				</svg>
			</a>
		</div>
		<div class="col-md-7 text-right">
			<!-- <button type="button" class="btn btn-warning btn-sm float-right" data-toggle="modal" data-target="#login" data-whatever="@mdo">Login</button>
			<button type="button" class="btn btn-warning btn-sm float-right mr-2" data-toggle="modal" data-target="#signup" data-whatever="@mdo">Signup</button> -->
			<a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#login" data-whatever="@mdo">Login</a>
			<a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#signup" data-whatever="@mdo">Signup</a>
			<a href="" class="mx-2 text-dark font-weight-bold">Check Out</a>
		</div>
	</div>

	<!--lOGIN modal-->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<strong class="my-3 h4">Welcome Please login to Continue</strong>
				<p>New Member? <a href="" data-toggle="modal" data-target="#signup" data-whatever="@mdo">Register</a> </p>
				<form>
					<div class="form-group">		
						<label for="email" class="col-form-label">Email:</label>
						<input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Password:</label>
						<input type="password" class="form-control pwd" id="password"> 	
					</div>
					<P><input type="checkbox" aria-label="Checkbox for following text input" class="mr-2">Remember me <a href="" class="float-right">Forgot Password?</a></P>
					
				</form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-warning">Login</button>
			</div>
		  </div>
		</div>
	</div>

	
	<!--signup modal-->
	<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<strong class="my-3 h4">Welcome Please Signup to Continue</strong>
				<p>Already Have an account the please login</p>
				<form>
					<div class="form-group">
						<label for="name" class="col-form-label">Full Name:</label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="emailadd" class="col-form-label">Email:</label>
						<input type="email" class="form-control" id="emailadd">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Password:</label>
						<input type="password" class="form-control" id="password">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Confirm Password:</label>
						<input type="password" class="form-control" id="password">
					</div>
					
				</form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-warning">Signup</button>
			</div>
		  </div>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="img/logos-01.png" alt="" height="60">
		</a>
		<ul class="main-menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="classes.html">Classes</a></li>
			<li><a href="shop.html">Shop</a></li>
			<li><a href="blog.html">Blog</a></li>
			<li><a class="active" href="contact.html">Contact</a></li>
			<li class="header-right">
				<div class="hr-box">
					<img src="img/location-icon.png" alt="">
					<h6>Koteshor, Kathmandu Nepal</h6>
				</div>
			</li>
		</ul>
	</header>
	<div class="clearfix"></div>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/4.jpg">
		<div class="container">
			<h2>Contact</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h2 class="contact-title">Contact Info</h2>
					<div class="contact-info-warp">
						<h4>Location</h4>
						<div class="contact-info">
							<img src="img/icons/1-dark.png" alt="">
							<div class="cf-text">
								<p>Koteshor, Kathmandu</p>
							</div>
						</div>
					</div>
					<div class="contact-info-warp">
						<h4>Subscriptions</h4>
						<div class="contact-info">
							<img src="img/icons/2-dark.png" alt="">
							<div class="cf-text">
								<p>+977 9860132537</p>
								
							</div>
						</div>
					</div>
					<div class="contact-info-warp">
						<h4>E-mail</h4>
						<div class="contact-info">
							<img src="img/icons/3-dark.png" alt="">
							<div class="cf-text">
								<p>Contact@upf.com</p>
								<p>www.upf.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<h2 class="contact-title">Get in touch</h2>
					<form class="contact-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Your name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Your e-mail">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="Subject">
								<textarea placeholder="Message"></textarea>
								<button class="site-btn">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Contact section end -->

	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/importjs.php'; ?>								

	</body>
</html>