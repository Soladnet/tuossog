<!doctype html>
<html>
<head>
	<link rel="stylesheet" media="screen and (min-device-width: 128px)" href="css/style.css">
	<link rel="shortcut icon" href="favicon.ico">
	<title>Gossout - </title>
</head>
<body>
	<div class="page-wrapper">
		<div class="nav">
			<ul>
				<!-- <img src="images/gossout-logo-image-svg.svg" alt="gossout-logo"> -->
				<li>Home</li>
				<li>Browse our Communities</li>
				<li>Help</li>
				<li></li>
				<li class="nav-search-container">
					<label for="nav-search">Search </label>
					<input name="nav-search" placeholder="..." type="text" value=""  required/>
				</li>
				<li class="float-right">Login</li>
			</ul>
			<div class="clear"></div>
		</div>
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
			<?php 
			include("new-post.php");
			include("new-post.php");
			include("new-post.php");
			?>			
</div>

		<div class="footer">
			<hr>
			<table cellspacing="5px">
				<tr>        
					<td> <a href="">About</a> </td>
					<td> <a href="">Terms</a> </td>
					<td> <a href="">Privacy</a> </td>
				</tr>
				<tr >
					<td colspan="3"> &copy; <?php echo date("Y");?> <a href="http://www.gossout.com">Gossout</a></td>
				</tr>
			</table>
			<div class="clear"></div>
		</div>
	</div>

</body>
</html>