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
			<span class="index-login">Already have an account? <a href="home.php">Login Here!</a></span>
			<div class="clear"></div>
		</div>
		<div class="index-banner">
			<div class="index-logo">
				<img src="images/gossout-logo-text-and-image-svg.svg" alt="logo" >
			</div>
		</div>
		<div class="index-intro">
			<div class="index-intro-1">
				<h1>
					Please read carefully! 
				</h1>
				<hr>
			</div>
		</div>
		<div class="index-intro-2">
			<div class="registration">
				<progress max="100" value="95" >95% done!</progress>
				<hr>
				<form>
					<ul>
						<li>
							<p class="info">
								We use <a href="http://en.wikipedia.org/wiki/HTTP_cookie">cookies</a>  to ensure that we give 
								you the best experience on our website. <!-- We also use cookies 
								to ensure we show you advertising that is relevant to you. --> 
								If you continue, we'll assume that you 
								are happy to receive all <a href="http://en.wikipedia.org/wiki/HTTP_cookie">cookies</a> on this website. 
								
							</p>
							<p class="info">
								By clicking <strong>Finish</strong>, you also agree to our 
								 <a href="">Terms of Service!</a>
							</p>
						</li>
						</ul>
						<br>
						<a href="home.php" class="button-big">Finish!</a>
					</form>
					<div class="clear"></div>
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