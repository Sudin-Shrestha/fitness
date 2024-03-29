	<!-- Footer section -->
	<?php
		$details = json_decode(
			file_get_contents('http://localhost/fitness/api/view/gymdetail'),
			TRUE
		);
		foreach($details as $detail){
			echo '
			<footer class="footer-section set-bg" data-setbg="../img/footer-bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4>Location</h4>
							<div class="fw-info-box">
								<img src="img/icons/1.png" alt="">
								<div class="fw-info-text">
									<p>'.$detail['gymLocation'].'</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4>Subscriptions</h4>
							<div class="fw-info-box">
								<img src="img/icons/2.png" alt="">
								<div class="fw-info-text">
									<p>'.$detail['gymPhone1'].'</p>
									<p>'.$detail['gymPhone2'].'</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4>E-mail</h4>
							<div class="fw-info-box">
								<img src="img/icons/3.png" alt="">
								<div class="fw-info-text">
									<p>'.$detail['gymEmail'].'</p>
									<p>www.upf.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4>Social Media</h4>
							<div class="fw-info-box">
								<img src="img/icons/4.png" alt="">
								<div class="social-links">
									<a href="#"><i class="fa fa-pinterest"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 order-2 order-md-1">
						<div class="copyright"><p>
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made by islington student
	</p></div>
					</div>
					<div class="col-md-6 order-1 order-md-2">
						<ul class="footer-menu">
							<li><a href="../home">Home</a></li>
							<li><a href="../about">About Us</a></li>
							<li><a href="../classes">Classes</a></li>
							<li><a href="../shop">Shop</a></li>
							<li><a href="../contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
			';
		}
	 ?>