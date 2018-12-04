<?php require_once("initialize.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Movies</title>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/movielist.css" type="text/css" media="all" />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/medile.css" rel='stylesheet' type='text/css' />
	<!-- banner-slider -->
	<link href="css/jquery.slidey.min.css" rel="stylesheet">
	<!-- //banner-slider -->
	<!-- pop-up -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-up -->
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<!-- //font-awesome icons -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- banner-bottom-plugin -->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({

		  autoPlay: 3000, //Set AutoPlay to 3 seconds

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]

		});

		}); 
	</script> 
	<!-- //banner-bottom-plugin -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<style>
		.star1{
			
			float: left; 
			font-size: 15px;
		}
		.star2{
			
			float: left; 
			font-size: 15px;
		}
		.star3{
			float: left; 
			font-size: 15px;
		}
		.star4{ 
			float: left; 
			font-size: 15px;
		}
		.star5{ 
			float: left; 
			font-size: 15px;
		}
		.hoveredStar {
			color: yellow; 
		}
	</style>
</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="index.html"><h1>305<span>Movies</span></h1></a>
			</div>
			<div class="w3_search">
				<form action="action.php" method="post">
					<input type="text" name="Search" placeholder="Search" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 123 345 653</li>
					<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
								<div class="toggle"><i class="fa fa-times fa-pencil"></i>
									<div class="tooltip">Click Me</div>
								</div>
								<div class="form">
									<h3>Login to your account</h3>
									<form action="#" method="post">
										<input type="text" name="Username" placeholder="Username" required="">
										<input type="password" name="Password" placeholder="Password" required="">
										<input type="submit" value="Login">
									</form>
								</div>
								<div class="form">
									<h3>Create an account</h3>
									<form action="#" method="post">
										<input type="text" name="Username" placeholder="Username" required="">
										<input type="password" name="Password" placeholder="Password" required="">
										<input type="email" name="Email" placeholder="Email Address" required="">
										<input type="text" name="Phone" placeholder="Phone Number" required="">
										<input type="submit" value="Register">
									</form>
								</div>
								<div class="cta"><a href="#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
		  	height: "toggle",
		  	'padding-top': 'toggle',
		  	'padding-bottom': 'toggle',
		  	opacity: "toggle"
		  }, "slow");
		});
	</script>
	<!-- //bootstrap-pop-up -->
	<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">Action</a></li>
												<li><a href="genres.html">Biography</a></li>
												<li><a href="genres.html">Crime</a></li>
												<li><a href="genres.html">Family</a></li>
												<li><a href="horror.html">Horror</a></li>
												<li><a href="genres.html">Romance</a></li>
												<li><a href="genres.html">Sports</a></li>
												<li><a href="genres.html">War</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">Adventure</a></li>
												<li><a href="comedy.html">Comedy</a></li>
												<li><a href="genres.html">Documentary</a></li>
												<li><a href="genres.html">Fantasy</a></li>
												<li><a href="genres.html">Thriller</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">Animation</a></li>
												<li><a href="genres.html">Costume</a></li>
												<li><a href="genres.html">Drama</a></li>
												<li><a href="genres.html">History</a></li>
												<li><a href="genres.html">Musical</a></li>
												<li><a href="genres.html">Psychological</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="top.php">Top Rated</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">Asia</a></li>
												<li><a href="genres.html">France</a></li>
												<li><a href="genres.html">Taiwan</a></li>
												<li><a href="genres.html">United States</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">China</a></li>
												<li><a href="genres.html">HongCong</a></li>
												<li><a href="genres.html">Japan</a></li>
												<li><a href="genres.html">Thailand</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.html">Euro</a></li>
												<li><a href="genres.html">India</a></li>
												<li><a href="genres.html">Korea</a></li>
												<li><a href="genres.html">United Kingdom</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="actors.php">Actors</a></li>
							<li><a href="rate.php">Rate A Movie</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
	<!-- //nav -->

	<!-- MOVIE LIST -->
	<div id="DIV_1">
		<br id="BR_14" />
		<table id="TABLE_15">
			<colgroup id="COLGROUP_16">
				<col id="COL_17" />
				<col id="COL_18" />
				<col id="COL_19" />
				<col id="COL_20" />
				<col id="COL_21" />
			</colgroup>
			<thead id="THEAD_22">
				<tr id="TR_23">
					<th id="TH_24">
					</th>
					<th id="TH_25">
						Movie Title
					</th>
					<th id="TH_27">
						What Is Your Rating?
					</th>
					<th id="TH_28">
					</th>
				</tr>
			</thead>
			
			<tbody id="TBODY_29">
				<?php 
					$result = rank_all_movies();
					$movie_names = array(); 
					while($nresult=db_fetch_assoc($result)){
						echo '
							<tr id="TR_69">
							<td id="TD_70">
								<span id="SPAN_71"></span><span id="SPAN_72"></span><span id="SPAN_73"></span><span id="SPAN_74"></span><span id="SPAN_75"></span> <a href="/title/tt0185906/?pf_rd_m=A2FGELUUNOQJNL&amp;pf_rd_p=12230b0e-0e00-43ed-9e59-8d5353703cce&amp;pf_rd_r=PDZ0DG8SQ8B0MRK3H9D1&amp;pf_rd_s=center-1&amp;pf_rd_t=15506&amp;pf_rd_i=toptv&amp;ref_=chttvtp_tt_2" id="A_76"><img src="https://m.media-amazon.com/images/M/MV5BMTI3ODc2ODc0M15BMl5BanBnXkFtZTYwMjgzNjc3._V1_UX45_CR0,0,45,67_AL_.jpg" width="45" height="67" id="IMG_77" alt="" /></a>
							</td>
							<td id="TD_78">
								 <a href="movieinfo.html" title="Scott Grimes, Damian Lewis" id="A_79">'.$nresult["movieName"].'</a> 
							</td>
							<td id="TD_82">
								<a href="rate_action1.php?name='.$nresult["movieName"].'&value=1><div class="star1">&#9734</div></a><a href="rate_action1.php?name='.$nresult["movieName"].'&value=2><div class="star2">&#9734</div></a><a href="rate_action1.php?name='.$nresult["movieName"].'&value=3><div class="star3">&#9734</div></a><a href="rate_action1.php?name='.$nresult["movieName"].'&value=4><div class="star4">&#9734</div></a><a href="rate_action1.php?name='.$nresult["movieName"].'&value=5><div class="star5">&#9734</div></a>
							</td>
							<td id="TD_105">
								<div id="DIV_106">
									<div id="DIV_107">
									</div>
								</div>
							</td>
						</tr>';
						array_push($movie_names, $nresult["movieName"]); //add movie name to array
					}
					db_free_result($result);
					db_close($db);
				?>
			</tbody>
		</table>
	</div>




	<!-- //MOVIE LIST -->




	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".dropdown").hover(            
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
					$(this).toggleClass('open');        
				},
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
					$(this).toggleClass('open');       
				}
			);
			);
			$(".star1").click(function() {
					var s = ""
				}
			);
			$(".star1").hover(
				function() {
					$(this).addClass("hoveredStar");
				},
				function(){
					$(this).removeClass("hoveredStar");
				}
			);
			$(".star2").hover(
				function() {
					$(this).closest(".star1").addClass("hoveredStar");
					$(this).addClass("hoveredStar");
				},
				function(){
					$(this).closest(".star1").removeClass("hoveredStar");
					$(this).removeClass("hoveredStar");
				}
			);
			$(".star3").hover(
				function() {
					$(this).closest(".star1").addClass("hoveredStar");
					$(this).closest(".star2").addClass("hoveredStar");
					$(this).addClass("hoveredStar");
				},
				function(){
					$(this).closest(".star1").removeClass("hoveredStar");
					$(this).closest(".star2").removeClass("hoveredStar");
					$(this).removeClass("hoveredStar");
				}
			);
			$(".star4").hover(
				function() {
					$(this).closest(".star1").addClass("hoveredStar");
					$(this).closest(".star2").addClass("hoveredStar");
					$(this).closest(".star3").addClass("hoveredStar");
					$(this).addClass("hoveredStar");
				},
				function(){
					$(this).closest(".star1").removeClass("hoveredStar");
					$(this).closest(".star2").removeClass("hoveredStar");
					$(this).closest(".star3").removeClass("hoveredStar");
					$(this).removeClass("hoveredStar");
				}
			);
			$(".star5").hover(
				function() {
					$(this).closest(".star1").addClass("hoveredStar");
					$(this).closest(".star2").addClass("hoveredStar");
					$(this).closest(".star3").addClass("hoveredStar");
					$(this).closest(".star4").addClass("hoveredStar");
					$(this).addClass("hoveredStar");
				},
				function(){
					$(this).closest(".star1").removeClass("hoveredStar");
					$(this).closest(".star2").removeClass("hoveredStar");
					$(this).closest(".star3").removeClass("hoveredStar");
					$(this).closest(".star4").removeClass("hoveredStar");
					$(this).removeClass("hoveredStar");
				}
			);
			
		});
	</script>
	<!-- //Bootstrap Core JavaScript -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->
	</body>
	</html>