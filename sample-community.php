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
			<div class="posts">
				<h1>Sample Community</h1>
				<?php 
				include("post-box.php");
				?>
				<div class="timeline-filter">
					<ul>
						<li><span class="icon-16-list"></span></li>
						<li class="active"><a href="">All</a></li>
						<li><a href=""><p>Friends</p> </a></li>
						<li><a href=""><p>Communities</p></a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<?php 
				include("new-post.php");
				include("new-post.php");
				include("new-post.php");
				include("new-post.php");
				include("new-post.php");
				?>
				<div class="clear"></div>
			</div>
			
		<?php
			include("sample-community-aside.php");
		?>			
		</div>
		<?php
			include("footer.php");
		?>
	</div>

</body>
</html>