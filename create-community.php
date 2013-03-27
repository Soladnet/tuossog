<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" /> -->
<script type="text/javascript" src="scripts/jquery.fancybox.pack.js?v=2.1.4"></script>

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
				<hr>
				<div class="individual-detail">
					<h2>Type</h2>
					<select value="type">
						<option> Select type </option>
						<option> College </option>
						<option> Location</option>
						<option> Other</option>
					</select>
					<p class="desc">Select the type of community you want to create</p>
				</div>

				<div class="individual-detail">
					<h2>Name</h2>
					<input type="text">
					<p class="desc">This name would be used to identify the community</p>
				</div>

				<div class="individual-detail">
					<h2>About</h2>
					<textarea></textarea>
					<p class="desc">Give a short description of the community</p>
				</div>
					
				
				<div class="individual-detail">
					<h2>Privacy</h2>
					<p> <input type="checkbox"> Make community private</p>
					<p class="desc">Private communities can only be accessed by members that are invited to join</p>
				</div>
				<br>
				<input type="button" class="button submit" value="Create">
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