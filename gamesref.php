<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>PTSS Live Scoreboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><span>PTSS Live Scoreboard</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="vsfoot.php" class="nav-link">Back</a></li>
					<li class="nav-item active"><a href="chooselog.php" class="nav-link">Logout</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Live Scoreboard</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Games <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-game-schedule bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading-section ftco-animate mb-4">
					<span class="subheading">Game Team Football</span>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12 carousel-game-schedule owl-carousel">
					<div class="item">
						<div class="game-schedule">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-1.jpg);"></div>
								<div class="pl-4 desc">
									<span class="venue">Football Field</span>
									<h4 class="team-name">JTMK</h4>
									<span class="date">October 10, 2019</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="game-schedule">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-2.jpg);"></div>
								<div class="pl-4 desc">
									<span class="venue">Football Field</span>
									<h4 class="team-name">JKE</h4>
									<span class="date">October 10, 2019</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="game-schedule">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-3.jpg);"></div>
								<div class="pl-4 desc">
									<span class="venue">Football Field</span>
									<h4 class="team-name">JKM</h4>
									<span class="date">October 10, 2019</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="game-schedule">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-4.jpg);"></div>
								<div class="pl-4 desc">
									<span class="venue">Football Field</span>
									<h4 class="team-name">JP</h4>
									<span class="date">October 10, 2019</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="game-schedule">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-4.jpg);"></div>
								<div class="pl-4 desc">
									<span class="venue">Football Field</span>
									<h4 class="team-name">JRKV</h4>
									<span class="date">October 10, 2019</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="game-schedule">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-4.jpg);"></div>
								<div class="pl-4 desc">
									<span class="venue">Football Field</span>
									<h4 class="team-name">JPH</h4>
									<span class="date">October 10, 2019<span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="game-schedule">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-5.jpg);"></div>
								<div class="pl-4 desc">
									<span class="venue">Football Field</span>
									<h4 class="team-name">JPA</h4>
									<span class="date">October 10, 2019</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="game-schedule">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-6.jpg);"></div>
								<div class="pl-4 desc">
									<span class="venue">Football Field</span>
									<h4 class="team-name">JMSK</h4>
									<span class="date">October 10, 2019</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="heading-section ftco-animate">
						<h2 class="mb-4">Live scoreboard Game Football  

					<?php
					$sql = "SELECT game_id FROM team WHERE team_1='JTMK' AND sport='football'";
					$sql2 = "SELECT * FROM game_score WHERE game_id IN ($sql)";
					$row = $conn->query($sql2)->fetch_object(); 
					?>
					<div class="scoreboard mb-5 mb-lg-3">
						<div class="divider text-center"><span>Sukan Jabatan</span></div>
						<div class="d-sm-flex mb-4">
						 	<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-1.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score lost"><span><?php echo $row->steam_1set1 + $row->steam_1set2; ?></span></h3>
									<h4 class="team-name">JTMK</h4>
								</div>
							</div>
							<div class="sport-team d-flex align-items-center">
								<div class="img logo order-sm-last" style="background-image: url(images/team-2.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score win"><span><?php echo $row->steam_2set1 + $row->steam_2set2; ?></span></h3>
									<h4 class="team-name">JRKV</h4>
								</div>
							</div>
						</div>
					</div>

					<?php
					$sql = "SELECT game_id FROM team WHERE team_1='JP' AND sport='football'";
					$sql2 = "SELECT * FROM game_score WHERE game_id IN ($sql)";
					$row = $conn->query($sql2)->fetch_object(); 
					?>
					<div class="scoreboard mb-5 mb-lg-3">
						<div class="divider text-center"><span>Sukan Jabatan</span></div>
						<div class="d-sm-flex mb-4">
						 	<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-1.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score lost"><span><?php echo $row->steam_1set1 + $row->steam_1set2; ?></span></h3>
									<h4 class="team-name">JP</h4>
								</div>
							</div>
							<div class="sport-team d-flex align-items-center">
								<div class="img logo order-sm-last" style="background-image: url(images/team-2.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score win"><span><?php echo $row->steam_2set1 + $row->steam_2set2; ?></span></h3>
									<h4 class="team-name">JMSK</h4>
								</div>
							</div>
						</div>
					</div>
					<?php
					$sql = "SELECT game_id FROM team WHERE team_1='JKE' AND sport='football'";
					$sql2 = "SELECT * FROM game_score WHERE game_id IN ($sql)";
					$row = $conn->query($sql2)->fetch_object(); 
					?>
					<div class="scoreboard mb-5 mb-lg-3">
						<div class="divider text-center"><span>Sukan Jabatan</span></div>
						<div class="d-sm-flex mb-4">
						 	<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/jke.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score lost"><span><?php echo $row->steam_1set1 + $row->steam_1set2; ?></span></h3>
									<h4 class="team-name">JKE</h4>
								</div>
							</div>
							<div class="sport-team d-flex align-items-center">
								<div class="img logo order-sm-last" style="background-image: url(images/jph.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score win"><span><?php echo $row->steam_2set1 + $row->steam_2set2; ?></span></h3>
									<h4 class="team-name">JPH</h4>
								</div>
							</div>
						</div>
					</div>

					<?php
					$sql = "SELECT game_id FROM team WHERE team_1='JPA' AND sport='football'";
					$sql2 = "SELECT * FROM game_score WHERE game_id IN ($sql)";
					$row = $conn->query($sql2)->fetch_object(); 
					?>
					<div class="scoreboard mb-5 mb-lg-3">
						<div class="divider text-center"><span>Sukan Jabatan</span></div>
						<div class="d-sm-flex mb-4">
						 	<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/team-1.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score lost"><span><?php echo $row->steam_1set1 + $row->steam_1set2; ?></span></h3>
									<h4 class="team-name">JPH</h4>
								</div>
							</div>
							<div class="sport-team d-flex align-items-center">
								<div class="img logo order-sm-last" style="background-image: url(images/team-2.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score win"><span><?php echo $row->steam_2set1 + $row->steam_2set2; ?></span></h3>
									<h4 class="team-name">JKM</h4>
								</div>
							</div>
						</div>
					</div>

					
				

				</div>
				<div class="col-md-5 sidebar">
					<div class="sidebar-box">

						</a>
						<small style="color: rgba(255,255,255,1); font-size: 16px;">Watch Highlights</small>
						</p>
					</div>
				</div>
			</div>
	</section>
	<section class="ftco-subscribe img" style="background-image: url(images/bg_1.jpg);">
		<div class="overlay">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-10 text-wrap text-center heading-section heading-section-white ftco-animate">
						<h2>Subcribe to our upcoming match</h2>
						<div class="row d-flex justify-content-center mt-4 mb-4">
							<div class="col-md-10">
								<form action="#" class="subscribe-form">
									<div class="form-group d-flex">
										<input type="text" class="form-control" placeholder="Enter email address">
										<input type="submit" value="Subscribe" class="submit px-3">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="ftco-footer ftco-footer-2 ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Knights</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>