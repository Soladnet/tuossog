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
					You're almost there...! 
				</h1>
				<hr>
			</div>
		</div>
		<div class="index-intro-2">
			<div class="registration">
				<progress max="100" value="50" >50% done!</progress>
				<hr>
				<form>
					<ul>
						<li>
							<label for="email">eMail Address</label>
							<input  name="email" type="email" spellcheck="false" placeholder="e.g   your.email@example.com" class="input-fields" value="" maxlength="50" required /> 
						</li>
						<li>
							<label for="password">Password</label>
							<input  name="password" type="password" placeholder="Minimum of 6 characters" spellcheck="false" class="input-fields" value="" min="6" maxlength="255" required /> 
						</li>
						<li>
							<label for="cpassword">Confirm Password</label>
							<input  name="cpassword" type="password" placeholder="Re-type password" spellcheck="false" class="input-fields" value="" min="6" maxlength="255" required /> 
						</li>
					</ul>
					<br>
					<a href="signup3.php" class="button-big">Next!</a>
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