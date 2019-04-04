<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="/assets/favicon.png">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="/assets/welcome.css">
		<title>Welcome</title>
	</head>
	<body class="body">
					<!-- Header start from this line ***********************************-->
					<?php $this->load->view('/header/header-1.php') ?>
					<!-- End of the Header *********************************************-->
					<br>
					<!-- Main part start ***********************************************-->
						<main>
							<div class="left">
								<div id="demo" class="carousel slide " data-ride="carousel">
									<ul class="carousel-indicators">
										<li data-target="#demo" data-slide-to="0" class="active"></li>
										<li data-target="#demo" data-slide-to="1"></li>
										<li data-target="#demo" data-slide-to="2"></li>
										<li data-target="#demo" data-slide-to="3"></li>
										<li data-target="#demo" data-slide-to="4"></li>
										<li data-target="#demo" data-slide-to="5"></li>
										<li data-target="#demo" data-slide-to="6"></li>
										<li data-target="#demo" data-slide-to="7"></li>
									</ul>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="/assets/pic1.jpg" alt="Los Angeles" width="1100" height="500">
											<div class="carousel-caption">
												<p></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="/assets/pic2.jpg" alt="Chicago" width="1100" height="500">
											<div class="carousel-caption">
												<p></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="/assets/pic3.jpg" alt="New York" width="1100" height="500">
											<div class="carousel-caption">
												<p></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="/assets/pic4.jpg" alt="New York" width="1100" height="500">
											<div class="carousel-caption">
												<p></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="/assets/pic5.jpg" alt="New York" width="1100" height="500">
											<div class="carousel-caption">
												<p></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="/assets/pic6.jpg" alt="New York" width="1100" height="500">
											<div class="carousel-caption">
												<p></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="/assets/pic7.jpg" alt="New York" width="1100" height="500">
											<div class="carousel-caption">
												<p></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="/assets/pic8.jpg" alt="New York" width="1100" height="500">
											<div class="carousel-caption">
												<p></p>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#demo" data-slide="prev">
										<span class="carousel-control-prev-icon"></span>
									</a>
									<a class="carousel-control-next" href="#demo" data-slide="next">
										<span class="carousel-control-next-icon"></span>
									</a>
								</div>
							</div>
							<div class="right">
								<h2 style="color: #22626B;">We empower women in business</h2>
								<p class="mid-text">Female Ventures is a non-profit organisation that stimulates and supports female leadership and entrepreneurship in corporates, SMEs and start-ups.</p>
								<p class="mid-text">This profits women, companies and society as a whole.<a style="text-align: left;" href="signup"> Join us!</a></p>
										<p> "I would rather walk with a friend in the dark, than alone in the light."
         								— Helen Keller</p>
										<ul>
											<h5 style="color: red;">Registered Friends have access to:</h5>
											<li>Personal profile page</li>
											<li>Find other Friends</li>
											<li>Mentor/Mentee program</li>
											<li>Female Match recruitment program</li>
										</ul>
							</div>
						</main>
		   <!-- Main finish here *************************************************-->
			 	<hr><br>
					<!-- footer begins from here *********************************************-->
					<footer>
							<?php $this->load->view('footer/footer.php'); ?>
					</footer>
					<!-- footer finish *******************************************************-->
								<!-- Optional JavaScript -->
								<!-- jQuery first, then Popper.js, then Bootstrap JS -->
								<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
								<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
