<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BookingKaro.com - Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />

	<!--FOR CSS --> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet" /> 
	<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
	<link href="css/style1.css" rel="stylesheet" />
</head>

<body>
	<div id="wrapper" class="home-page"> 
		
		<!-- start header -->
		<?php include('includes/header.php') ?>
		<!-- end header -->
		<section id="banner">
			<!-- Slider -->
			<div id="slider" data-zs-src='["img/photos/intro.jpeg","img/photos/test1.jpg","img/photos/test2.jpg", "img/photos/test3.jpeg"]'>
			</div>
			<!-- end slider --> 
		</section>  

		<section class="projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aligncenter"><h1 class="aligncenter">Our Top Services</h1><b>Find the best experiences happening out there in your city or enjoy handpicked content while sitting comfortably at home. BookingKaro.com is your go-to place to figure out what to do today!...</b></div>
						<br/>
					</div>
				</div>

				<div class="row service-v1 margin-bottom-40">
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/movieticket.jpg" alt="">   
							</div>
							<div class="card-content"> 
								<p>
									<h4><b>Cinemas</b></h4>
									
									<a href="OMTB/index.php" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/party.jpg" alt="">   
							</div>
							<div class="card-content">
								<p>
									<h4><b>Live Shows</b></h4>
									<a href="hosteluser" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/comedy.jpg" alt="">  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Comedy Shows</b></h4>
			
									<a href="#" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>        
					</div>
					        
					</div> 
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/events.jpg" alt="">   
							</div>
							<div class="card-content"> 
								<p>
									<h4><b>Events</b></h4>
									
									<a href="#" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/activities.jpg" alt="">   
							</div>
							<div class="card-content"> 
								<p>
									<h4><b>Activites</b></h4>
									
									<a href="#" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/sports.jpg" alt="">   
							</div>
							<div class="card-content"> 
								<p>
									<h4><b>Sports</b></h4>
									
									<a href="#" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>        
					</div>
				</div>
			</div>
		</section>

	<!--Recommended Moveis part -->
		<section class="projects-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aligncenter"><h2 class="aligncenter">Recommended Movies</h2></div>
						<br/>
					</div>
				</div>

				<div class="row service-v1 margin-bottom-40">
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendMovies/Antman.jpeg" alt="" ></a>
							</div>
							<div class="card-content"> 
								<p>
									<h4><b>Ant-Man and the Wasp</b></h4>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendMovies/Pathaan.jpeg" alt="" ></a>   
							</div>
							<div class="card-content">
								<p>
									<h4><b>Pathaan</b></h4>
							
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendMovies/RRR.jpeg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>RRR</b></h4>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendMovies/Avatar.jpeg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Avatar:The Way Of Water</b></h4>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendMovies/TJMM.jpeg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Tu Jhoothi Main Makkaar</b></h4>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendMovies/Shehzada.jpeg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Shehzada</b></h4>
								</p>
							</div>
						</div>        
					</div>        
					</div>
				</div>
			</div>
		</section>
	
	<!--Recomended Shows-->
	<section class="projects-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aligncenter"><h2 class="aligncenter">Recommended Shows</h2></div>
						<br/>
					</div>
				</div>

				<div class="row service-v1 margin-bottom-40">
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendShows/a.jpg" alt="" ></a>    
							</div>
							<div class="card-content"> 
								<p>
									<h4><b>Essentia Luxury Hotel:Indore</b></h4>
									
							
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendShows/b.jpg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Venue To Be Announced:Indore</b></h4>
									
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendShows/c.jpg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Cafe Terraza:Indore</b></h4>
			
							
								</p>
							</div>
						</div>    
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendShows/d.jpg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Enrise By Sayaji:Indore</b></h4>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendShows/e.jpg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Rabindra Natya Garh:Indore</b></h4>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							<a href="hosteluser"><img src="img/RecommendShows/f.jpg" alt="" ></a>  
							</div>
							<div class="card-content">
								<p>
									<h4><b>Venue To Be Announced:Indore</b></h4>
								</p>
							</div>
						</div>        
					</div>        
					</div>
				</div>
			</div>
		</section>

     <!-- Footer -->
    <?php include('includes/footer.php') ?>
    </div>
	<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up HillSide"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>  
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	
	<!-- Vendor Scripts -->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.zoomslider.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script> 
	<script src="js/custom.js"></script>
</body>
</html>