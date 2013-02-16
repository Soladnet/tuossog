<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/jquery.Jcrop.min.js"></script>
	<link rel="stylesheet" href="css/jquery.Jcrop.min.css" type="text/css" />
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
			<div class="index-intro-2">
				<div class="registration">
					<div class="index-intro-1">
						<h1>
							Ahaa... That's it! 
						</h1>
					</div>	
					<progress max="100" value="75" >75% done!</progress>
					<hr>
					<form>
						<ul>
							<li>
								<label for="profile-pic">Upload a picture of you!</label>
								<div class="profile-pic">
									<img src="images/pic-2.jpg" id="target">
									<script language="Javascript">
									jQuery(function($) {
										$('#target').Jcrop({
											setSelect:   [ 0, 0, 150, 150 ],
											aspectRatio: 1 / 1,
											minSize: [150,150]
										});
									});
									</script>
								</div>
								<hr>
								<label>Select an image: </label>
								<input type="file" name="img" class="input-fields">
								<p></p>
								<input type="submit" class="button" value="Upload photo">
								<hr>
							</li>
						</ul>
						<br>
						<button class="button-big"><a href="signup-agreement.php">Skip</a></button>
						<button class="button-big"><a href="signup-agreement.php">Finish!</a></button>
					</form>
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