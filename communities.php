<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
</head>
<body>
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
			<div class="communities-list">
				<h1>Communities</h1>

				<div class="community-search-box">
					<input name="" class="community-search-field " placeholder="Search Communities" type="text" value="" required="">
					<input type="submit" class="button" value="Search">
				</div>
				<div class="clear"></div>
				

				<div class="community-box">
					
					<div class="community-box-wrapper">
						<div class="community-image">
							<img src="images/1.jpg">
						</div>
						<div class="community-text">
							<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
							<hr>
							<div class="details">ERP, a radio programme like no other... 
								with sole objective of making serious issues light. We educate and entertain.

							</div>
							<div class="members">200 Members</div>
							<div class="members">200 Posts</div>
						</div>
						<div class="clear"></div>
					</div>
					
					
					<div class="community-box-wrapper">
						<div class="community-image">
							<img src="images/1.jpg">
						</div>
						<div class="community-text">
							<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
							<div class="details">ERP, a radio programme like no other... 
								with sole objective of making serious issues light. We educate and entertain.

							</div>
							<div class="members">200 Members</div>
							<div class="members">200 Posts</div>
							
						</div>
						<div class="clear"></div></div>


						<div class="community-box-wrapper">
							<div class="community-image">
								<img src="images/eset.jpg">
							</div>
							<div class="community-text">
								<div class="community-name"><a href="sample-community.php">The Pennsylvania State University New Kensington Campus of the Commonwealth College</a> </div>
								<div class="details">

								</div>
								<div class="members">200 Members</div>
								<div class="members">200 Posts</div>

							</div>
							<div class="clear"></div></div>





						</div>
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