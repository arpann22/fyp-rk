<?php include_once("includes/basic_includes.php"); ?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Find Your Perfect Partner - MarriageCenter | Home ::
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<!--font-Awesome-->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--font-Awesome-->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
</head>

<body>
	<!-- ============================  Navigation Start =========================== -->
	<?php include_once("includes/navigation.php"); ?>
	<!-- ============================  Navigation End ============================ -->
	<div class="banner">
		<div class="container">
			<div class="banner_info">
				<h3>Choose your partner on own</h3>
				<a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
			</div>
		</div>

	</div>
	<div class="grid_1">
		<div class="container">
			<h1>Featured Profiles</h1>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
			</div>
			<ul id="flexiselDemo3">
				<?php
				$sql = "SELECT * FROM customer";
				$result = mysqlexec($sql);
				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
						$name = $row['firstname'] . " " . $row['lastname'];
						$profileid = $row['cust_id'];
						$age = $row['age'];
						$place = $row['state'] . "," . $row['district'];
						$job = $row['occupation'];

						//getting profilepic
						$pic1 = '';
						$sql2 = "SELECT * FROM photos WHERE cust_id = $profileid";
						$result2 = mysqlexec($sql2);
						if ($result2) {
							$row2 = mysqli_fetch_array($result2);
							$pic1 = $row2['pic1'];
						}
						//got profilepic
						//
						//Printing the html
						echo "<li><div class=\"col_1\"><a href=\"view_profile.php?id={$profileid}\">";
						echo "<img src=\"profile/{$profileid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"/>";
						echo "<div class=\"layer m_1 hidden-link hover-animation delay1 fade-in\">";
						echo "<div class=\"center-middle\">About {$name}</div>";
						echo "</div>";
						echo "<h3><span class=\"m_3\">Profile ID : {$profileid}</span><br>{$age}, {$place}<br>{$job}</h3></a></div>";
						echo "</li>";

					}
				}

				?>
			</ul>
			<script type="text/javascript">
				$(window).load(function () {
					$("#flexiselDemo3").flexisel({
						visibleItems: 6,
						animationSpeed: 1000,
						autoPlay: false,
						autoPlaySpeed: 3000,
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: {
							portrait: {
								changePoint: 480,
								visibleItems: 1
							},
							landscape: {
								changePoint: 640,
								visibleItems: 2
							},
							tablet: {
								changePoint: 768,
								visibleItems: 3
							}
						}
					});

				});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="grid_2">
		<div class="container">
			<h2>Success Stories</h2>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
			</div>
			<div class="row_1">
				<div class="col-md-8 suceess_story">
					<ul>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">march 2023</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="images/7.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Bijay and Bipana</a></h4>
									<p>We met from the MarriageCenter and then this was my best choice and helped me
										find the perfect partner for me.<a href="#">More...</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">march 2023</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="images/8.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Rajan and Nishma</a></h4>
									<p>We met from the MarriageCenter and then this was my best choice and helped me
										find the perfect partner for me.,.<a href="#">More...</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">march 2023</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="images/9.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Prasiddha and samikshya</a></h4>
									<p>We met from the MarriageCenter and then this was my best choice and helped me
										find the perfect partner for me.,.<a href="#">More...</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">march 2023</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="images/10.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Adesh and Rajju</a></h4>
									<p>We met from the MarriageCenter and then this was my best choice and helped me
										find the perfect partner for me.,.<a href="#">More...</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">march 2023</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="images/11.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">sachin and anita</a></h4>
									<p>We met from the MarriageCenter and then this was my best choice and helped me
										find the perfect partner for me.,.<a href="#">More...</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">march 2023</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="images/12.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Arpan and Katrina</a></h4>
									<p>We met from the MarriageCenter and then this was my best choice and helped me
										find the perfect partner for me.,.<a href="#">More...</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">march 2023</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="images/13.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Bijay and Bipana</a></h4>
									<p>We met from the MarriageCenter and then this was my best choice and helped me
										find the perfect partner for me.,.<a href="#">More...</a></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-4 row_1-right">
					<h3>News & Events</h3>
					<div class="box_1">
						<figure class="thumbnail1"><img width="170" height="155" src="images/14.jpg"
								class="img-responsive" alt="" /></figure>
						<div class="extra-wrap">
							<div class="post-meta">
								<span class="day">
									<time datetime="2014-05-25T10:15:43+00:00">25</time>
								</span>
								<span class="month">
									<time datetime="2014-05-25T10:11:51+00:00">May</time>
								</span>
							</div>
							<h4 class="post-title"><a href="#">Met my new partner</a></h4>
							<div class="clearfix"> </div>
							<div class="post-content">I am happy to share this.....</div>
							<a href="#" class="vertical">Read More</a>
						</div>
					</div>
					<div class="box_1">
						<figure class="thumbnail1"><img width="170" height="155" src="images/15.jpg"
								class="img-responsive" alt="" /></figure>
						<div class="extra-wrap">
							<div class="post-meta">
								<span class="day">
									<time datetime="2014-05-25T10:15:43+00:00">25</time>
								</span>
								<span class="month">
									<time datetime="2014-05-25T10:11:51+00:00">May</time>
								</span>
							</div>
							<h4 class="post-title"><a href="#">Marriage Center helped me alot</a></h4>
							<div class="clearfix"> </div>
							<div class="post-content">I was upset of not finding perfect partner......</div>
							<a href="#" class="vertical">Read More</a>
						</div>
					</div>
					<div class="box_2">
						<figure class="thumbnail1"><img width="170" height="155" src="images/1.jpg"
								class="img-responsive" alt="" /></figure>
						<div class="extra-wrap">
							<div class="post-meta">
								<span class="day">
									<time datetime="2014-05-25T10:15:43+00:00">25</time>
								</span>
								<span class="month">
									<time datetime="2014-05-25T10:11:51+00:00">May</time>
								</span>
							</div>
							<h4 class="post-title"><a href="#">Met my new partner</a></h4>
							<div class="clearfix"> </div>
							<div class="post-content">I am happy to share this.....</div>
							<a href="#" class="vertical">Read More</a>
						</div>
					</div>
					<div class="religion">
						<div class="religion_1-title">Religion :</div>
						<a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial"
							style="padding-left:0px !important;">Hindu</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Muslim Matrimonial">Muslim</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Christian Matrimonial">Christian</a>
						<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Sikh</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Inter Religion Matrimonial">Inter Religion</a>
					</div>
					<div class="religion">
						<div class="religion_1-title">Cities</div>
						<a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial"
							style="padding-left:0px !important;">Kathmandu</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Muslim Matrimonial">Pokhara</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Christian Matrimonial">Biratnagar</a>
						<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">India</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Inter Religion Matrimonial">Dharan</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Inter Religion Matrimonial">Chitwan</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Inter Religion Matrimonial">Butwal</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Inter Religion Matrimonial">View ALl</a>
					</div>
					<div class="religion">
						<div class="religion_1-title">Caste :</div>
						<a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial"
							style="padding-left:0px !important;">Brahmin</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Christian Matrimonial">Chhetri</a>
						<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Rai</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Inter Religion Matrimonial">Limbu</a>
						<span>|</span><a href="#" target="_blank" class="religion_1"
							title="Inter Religion Matrimonial">View All</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="bg">
		<div class="container">
			<h3>Guest Messages</h3>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
			</div>
			<div class="col-sm-6">
				<div class="bg_left">
					<h4>But I must explain</h4>
					<h5>Friend of Bride</h5>
					<p>"As a close friend of the bride, I have witnessed her journey and the challenges she faced in
						finding a compatible partner. However, thanks to your platform, her search for true love has
						come to a beautiful end. The comprehensive features and dedicated support offered by your site
						played a crucial role in facilitating this significant milestone..</p>
					<ul class="team-socials">
						<li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
						<li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
						<li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="bg_left">
					<h4>But I must explain</h4>
					<h5>Friend of Groom</h5>
					<p>"As a close friend of the groom, I have witnessed his journey and the challenges he faced in
						finding a compatible partner. However, thanks to your platform, his search for love and
						companionship has reached a delightful conclusion. The exceptional features and dedicated
						support offered by your site have played a vital role in making this possible.</p>
					<ul class="team-socials">
						<li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
						<li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
						<li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<?php include_once 'footer.php'; ?>