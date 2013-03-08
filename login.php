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
					We knew you'd come back ;) How've you been?
				</h1>
				<hr>
			</div>
				<form>
					<ul>
						<li>
							<label for="email">e-mail Address</label>
							<input class="input-fields" name="email" placeholder="email@awesome.com" type="text" value="" spellcheck="false" required/>
						</li>
						<li>
							<label for="password">Password</label>
							<input class="input-fields" name="password" placeholder="******" type="text" value="" spellcheck="false" required/>
						</li>
						</ul>
						<br>
						<button class="button-big"><a href="home.php">Login!</a></button>						
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