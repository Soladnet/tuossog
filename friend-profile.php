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
		<div class="logo" id="logo"><img alt=""></div>

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
			<div class="posts">
				<h1>Friend</h1>
				
				<?php
				
				include("friend-timeline.php");
				?>
				
			</div>
			
		<?php
			include("friend-aside.php");
		?>			
		</div>
		<?php
			include("footer.php");
		?>
	</div>

</body>
</html>