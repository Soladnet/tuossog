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
			<div class="settings-list">
				<h1>Settings</h1>
				<hr>
				<hr>
				<div class="individual-setting">
					<h2>Basic Settings</h2>
					<p>Name</p>
					<p>Email</p>
					<p>Password</p>
				</div>
				<div class="individual-setting">
					<h2>Privacy</h2>
					<p> <input type="checkbox"> Make my account private</p>
				</div>
				<div class="individual-setting">
					<h2>Notifications</h2>
					<p> <input type="checkbox"> Receive notifications through e-mail</p>
				</div>
				<input type="button" class="button submit" value="Save Changes">	
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