<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
</head>
<body>
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
				<h1>Join Communities and Share Stories, 
					Photos, Opinions with People.
				</h1>


				<input class="main-search" type="text" placeholder="...">

                                <span><center><button class="button-big"><a href="">Search</a></button> <!--<button class="button-big"><a href="">Sign up</a></button>--></center></span>
				<div class="clear"></div>

			</div>
			<div class="index-intro-2-container">
				<div class="index-intro-2">	

					<div class="index-functions">
						<div style="margin: 0 auto; width: 24px;">
							<span class="icon-globe"></span>
						</div>
						<h3>Discover</h3>
						<p>Communities &amp; Friends</p>
					</div>

					<div class="index-functions">
						<div style="margin: 0 auto; width: 24px;">
							<span class="icon-share"></span>
						</div>
						<h3>Connect</h3>
						<p>Meet People, Share Interests</p>
					</div>

				 <div class="index-functions">
					<div style="margin: 0 auto; width: 24px;">
						<span class="icon-search"></span>
					</div>
						<h3>Search</h3>
						<p>Communities and Friends</p>
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