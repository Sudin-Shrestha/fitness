<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	$PAGENAME='blog';
	include '../includes/import.php'; ?>
</head>
<style>
	.blog-text{
		/* white-space: nowrap;  */
		height: 90px; 
		overflow: hidden;
		text-overflow: ellipsis; 
	
	}
</style>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	
	<?php include '../includes/header.php'; ?>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="../img/header-bg/3.jpg">
		<div class="container">
			<h2>Blog</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<section class="blog-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

						
			<?php  $blogs = json_decode(
					file_get_contents('http://localhost/fitness/api/blog/all'),
					TRUE
					);
					foreach($blogs as $blog){
					echo '
					<div class="blog-item">
						<img src="http://localhost/fitness/api/storage/'.$blog['image'].'" alt="" style="object-fit: cover; height: 30%; width: 30%;" width="200" height="300">
						<h2>'.$blog['title'].'</h2>
						<div class="blog-metas">
							<div class="blog-meta"><img src="../img/icons/edit.png" alt=""> By Admin</div>
						</div>
						<p class="blog-text">'.$blog['description'].'</p>
						<a href="../article/?id='.$blog['id'].'" class="site-btn">Read More</a>
					</div>
					';
					}
					?>


				
					
			
					<div class="site-pagination">
						<a href="" class="active">01</a>
						<a href="">02</a>
						<a href="">03</a>
						<a href="">04</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-7 col-sm-9 sidebar">
					<div class="widget-area">
						<form class="search-widget">
							<input type="text" placeholder="Search">
							<button><img src="img/icons/search.png" alt=""></button>
						</form>
					</div>
					<!-- <div class="widget-area">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="">Body Building<span>5</span></a></li>
							<li><a href="">Nutritions Tips<span>7</span></a></li>
							<li><a href="">Pillates & Yoga<span>9</span></a></li>
							<li><a href="">Events & Competitions<span>10</span></a></li>
							<li><a href="">Workout<span>15</span></a></li>
							<li><a href="">Fitness<span>8</span></a></li>
							<li><a href="">Wellness Treatments<span>6</span></a></li>
							<li><a href="">Uncategorized<span>47</span></a></li>
						</ul>
					</div> -->
					<div class="widget-area">
						<h2 class="widget-title">Recent Posts</h2>
						<div class="recent-post-widget">
							<div class="rp-item">
								<img src="img/blog/blog-widget/1.jpg" alt="">
								<div class="rp-text">
									<p>Lorem ipsum dolor sit amet, consectetur.</p>
									<div class="rp-date">February 17, 2019</div>
								</div>
							</div>
							<div class="rp-item">
								<img src="img/blog/blog-widget/2.jpg" alt="">
								<div class="rp-text">
									<p>Consectetur lorem ipsum dolor sit amet.</p>
									<div class="rp-date">February 17, 2019</div>
								</div>
							</div>
							<div class="rp-item">
								<img src="img/blog/blog-widget/3.jpg" alt="">
								<div class="rp-text">
									<p>Ipsum dolor sit amet, consectetur. </p>
									<div class="rp-date">February 17, 2019</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								


	</body>
</html>
