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
			<div class="all-friends-list">
				<h1>Search</h1>
				<div class="friend-search-box">
					<input name="" class="friend-search-field " placeholder="Search Everything" type="text" value="" required="">
					<input type="submit" class="button" value="Search">
				</div>
				<div class="clear"></div>

				<div class="timeline-filter">
					<ul>
						<li><span class="icon-16-search"></span></li>
						<li class="active"><a href="">All</a></li>
						<li><a href="">Communities</a></li>
						<li><a href="">Friends</a></li>
					</ul>
				</div>
			<div class="communities-list all-search-community-list">
				<div class="community-box no-margin">
					<div class="community-box-wrapper">
						<div class="community-image">
							<img src="images/1.jpg">
						</div>
						<div class="community-text">
							<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
							<hr>
							<p class="community-privacy"> 
								<div class="details">ERP, a radio programme like no other... 
									with sole objective of making serious issues light. We educate and entertain.

								</div>
								<div class="members">Private</div>
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
							<hr>
							<p class="community-privacy"> 
								<div class="details">ERP, a radio programme like no other... 
									with sole objective of making serious issues light. We educate and entertain.

								</div>
								<div class="members">Private</div>
								<div class="members">200 Members</div>
								<div class="members">200 Posts</div>
							</div>
							<div class="clear"></div>
					</div>
				</div>
			</div>
				<div class="individual-friend-box">
					<a class= "fancybox " id="inline" href="#kori">
						<div class="friend-image">
							<img src="images/2.jpg">
						</div>
						<div class="friend-text">
							<div class="friend-name">Muhammad Abdullahi Kori</div>
							<div class="friend-location">Abuja, Federal Capital Territory, Nigeria</div>
						</div>
						<div style="display:none">
							<div id="kori">
								<div class="aside-wrapper">
									<img class="profile-pic" src="images/2.jpg">
									<table>
										<tr><td></td><td><h3>Kori Muhammad Abdullahi</h3></td></tr>
										<tr><td><span class="icon-16-map"></span></td><td class="profile-meta"> Abuja, Federal Capital Territory, Nigeria</td></tr>
										<tr><td><span class="icon-16-female"></span></td><td class="profile-meta"> Female</td></tr>
										<tr><td><span class="icon-16-male"></span></td><td class="profile-meta"> Male</td></tr>
										<tr><td><span class="icon-16-dot"></span></td><td class="profile-meta"><a href="">See Profile</a> </td></tr>
									</table>					
									<div class="clear"></div>
									<button class="profile-meta-functions button"><span class="icon-16-eye"></span> Wink</button>
									<button class="profile-meta-functions button"><span class="icon-16-mail"></span> Send Message</button>
									<button class="profile-meta-functions button"><span class="icon-16-checkmark"></span> Accept Friendship</button>

									<div class="clear"></div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="individual-friend-box">
					<a class= "fancybox " id="inline" href="#kori">
						<div class="friend-image">
							<img src="images/2.jpg">
						</div>
						<div class="friend-text">
							<div class="friend-name">Muhammad Abdullahi Kori</div>
							<div class="friend-location">Abuja, Federal Capital Territory, Nigeria</div>
						</div>
						<div style="display:none">
							<div id="kori">
								<div class="aside-wrapper">
									<img class="profile-pic" src="images/2.jpg">
									<table>
										<tr><td></td><td><h3>Kori Muhammad Abdullahi</h3></td></tr>
										<tr><td><span class="icon-16-map"></span></td><td class="profile-meta"> Abuja, Federal Capital Territory, Nigeria</td></tr>
										<tr><td><span class="icon-16-female"></span></td><td class="profile-meta"> Female</td></tr>
										<tr><td><span class="icon-16-male"></span></td><td class="profile-meta"> Male</td></tr>
										<tr><td><span class="icon-16-dot"></span></td><td class="profile-meta"><a href="">See Profile</a> </td></tr>
									</table>					
									<div class="clear"></div>
									<button class="profile-meta-functions button"><span class="icon-16-eye"></span> Wink</button>
									<button class="profile-meta-functions button"><span class="icon-16-mail"></span> Send Message</button>
									<button class="profile-meta-functions button"><span class="icon-16-checkmark"></span> Accept Friendship</button>

									<div class="clear"></div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="clear"></div>
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