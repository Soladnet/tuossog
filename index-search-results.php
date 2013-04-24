<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
</head>
<body>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
			openEffect: 'none',
			closeEffect: 'none'

		});
	});
	</script>
	<div class="index-page-wrapper">	
		<div class="index-nav">
			<span class="index-login">Already have an account? <a href="home.php">Login Here</a></span>
			<div class="clear"></div>
		</div>
		<div class="index-banner">
			<div class="index-logo">
				<img src="images/gossout-logo-text-and-image-svg.svg" alt="logo" >
			</div>
		</div>
		<div class="index-intro">
			<div class="index-intro-1">
				<h1>Search Results</h1>
				<input class="main-search" type="text" placeholder="Ciroma Chukwuma Adekunle">

				<button class="button-big"><a href="">Search</a></button>
				<div class="clear"></div>

				<hr>
			</div>
			<div class="index-intro-2-container">
				<div class="index-search-results">	
					<div class="index-search-results-posts">
						<h2>Posts</h2>
						<hr>
						<div class="index-search-result">
							<h3>
								<a href=""><img class="post-profile-pic" src="images/2.jpg">Ciroma Chukwuma Adekunle</a>
								<div class="float-right">
									<span class="post-time"><span class="icon-16-comment"></span>50</span>
									<span class="post-time"><span class="icon-16-share"></span>24</span>
									<span class="post-time"><span class="icon-16-clock"></span>5 mins</span>
								</div>
								<div class="clear"></div>
								<hr>
							</h3>
							<a  class="fancybox" rel="gallery1"  href="images/pic-1.jpg" rel="group"><img src="images/pic-1.jpg"></a>
							<a  class="fancybox" rel="gallery1"  href="images/eset.jpg" rel="group"><img src="images/eset.jpg"></a>	
							<p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
					<div class="index-search-results-communities">
						<h2>Communities</h2>
						<hr>
						<div class="index-search-result">
							<h3><a href=""><img class="post-profile-pic" src="images/abu.png">Ahmadu Bello University, Zaria</a></h3>
							<hr>
							<p>No description.</p>
							<hr>
							<a href=""><span class="icon-16-dot"></span>98 posts</a>
							<a href=""><span class="icon-16-dot"></span>3.6k members</a>
						</div>
					</div>
					<div class="index-search-results-friends">
						<h2>People</h2>
						<hr>
						<div class="index-search-result">
							<h3><a href="">Muhammad Abdullahi Kori</a></h3>
							<img class="float-left" src="images/3.jpg">

							<p> <span class="icon-16-location"></span>Abuja, Federal Capital Territory, Nigeria </p>
							<p> <span class="icon-16-calendar"></span>Joined on Feb 18, 2013 </p>
							<p> <span class="icon-16-male"></span>Male </p>
							<p> <span class="icon-16-female"></span>Female </p>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>		
		</div>
		<div class="index-shadow-bottom"></div>
		<div class="index-content-wrapper">

			<?php
			include("footer.php");
			?>
		</div>

	</div>
</body>
</html>