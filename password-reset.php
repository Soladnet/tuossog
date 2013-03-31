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
			<span class="index-login">No account? <a href="signup-personal.php">Signup Here!</a></span>
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
							Password Reset
						</h1>
						<hr>
					</div>
					<h3>Ciroma Chukwuma Adekunle</h3>
					<h4>sample.email@domain.name.ng</h4>
					<hr>
					<form>
						<ul>						
							<li>
								<label for="password">New Password</label>
								<input  name="password" type="password" placeholder="Minimum of 6 characters" spellcheck="false" class="input-fields" value="" min="6" maxlength="255" required /> 
							</li>
							<li>
								<label for="cpassword">Confirm Password</label>
								<input  name="cpassword" type="password" placeholder="Re-type password" spellcheck="false" class="input-fields" value="" min="6" maxlength="255" required /> 
							</li>
							<button class="button-big"><a href="">Reset Password</a></button>						
						</form>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="index-content-wrapper">
				<?php
				include("footer.php");
				?>
			</div>

		</div>
	</body>
	</html>