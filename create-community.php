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
				openEffect	: 'none',
				closeEffect	: 'none'
				
			});
		});
	</script>
	<div class="page-wrapper">
		<?php
		include ("nav.php");
		include ("nav-user.php");
		?>
		<div class="logo"><img src="images/gossout-logo-text-svg.svg" alt=""></div>

		<div class="content">
			<script type="text/javascript">
			function showHide(shID) {
				if (document.getElementById(shID)) {
					if (document.getElementById(shID+'-show').style.display != 'none') {
						document.getElementById(shID+'-show').style.display = 'none';
						document.getElementById(shID).style.display = 'block';
					}
					else {
						document.getElementById(shID+'-show').style.display = 'inline';
						document.getElementById(shID).style.display = 'none';
					}
				}
			}
			</script>
			<div class="create-community">
				<h1>Create Community</h1>
				<hr>
				<h3>Some surutu and turance...! :D Lorem ipsum dolor sit amet, consectetur 
				adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </h3>
				<h3 class="notice">Please, NOTE that Communities are deleted 
				after <strong>XX</strong> days of inactivity.</h3>
				<hr>
				<div class="individual-detail">
					<h2>1. Type</h2>
					<p class="desc">Select the type of community you want to create</p>
					<select value="type">
						<option> Select type </option>
						<option> College </option>
						<option> Location</option>
						<option> Other</option>
					</select>
				</div>

				<div class="individual-detail">
					<h2>2. Name</h2>
					<p class="desc">This name would be used to identify the community</p>
					<input type="text">
				</div>

				<div class="individual-detail">
					<h2>3. About</h2>
					<p class="desc">Give a short description of the community</p>
					<textarea></textarea>
				</div>
					
				
				<div class="individual-detail">
					<h2>4. Privacy</h2>
					<p class="desc">Private communities can only be accessed by members that are invited to join</p>
					<p> <input type="checkbox"> Make community private</p>
				</div>


				<div class="individual-detail">
					<h2>5. Community Photo</h2>
					<p class="desc">Logo, Badge, whatever image that best represents your Community</p>
					
								<div class="pic-community">
									<img src="images/no-pic.svg" id="community-img">
									<script language="Javascript">
									jQuery(function($) {
										$('#community-img').Jcrop({
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
				</div>
				<br>
				<input type="button" class="button-big" value="Create">
			</div>
			
		<?php
			include("aside.php");
		?>			
		</div>
		<?php
			include("footer.php");
		?>
	</div>

</body>
</html>