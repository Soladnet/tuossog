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
				<h1>Welcome</h1>
				<hr>
				<div class="success">
					<p>Gossout is fun with more Communities and Friends. Join Communities and add Friends to start interacting. Here are some suggestions</p>
			   	</div>
			  <div class="communities-list full-width no-padding">
				<div class="community-box">
					
				    <div class="community-box-wrapper">
				    	<div class="community-image">
				    		<img src="images/1.jpg">
				    	</div>
				    	<div class="community-text">
				    		<div class="community-name"><a href="sample-community.php">Community 1</a> </div>
				    		<hr>
				    			<div class="details">ERP, a radio programme like no other... 
				    				with sole objective of making serious issues light. We educate and entertain.

				    			</div>
				    			<div class="members">Private</div>
				    			<div class="members">200 Members</div>
				    			<div class="members">200 Posts</div>
				    	</div>
				    	<a class="float-right">Join</a> <div class="clear"></div>
				    </div>
				    <div class="community-box-wrapper">
				    	<div class="community-image">
				    		<img src="images/1.jpg">
				    	</div>
				    	<div class="community-text">
				    		<div class="community-name"><a href="sample-community.php">Community 2</a> </div>
				    		<hr>
				    			<div class="details">ERP, a radio programme like no other... 
				    				with sole objective of making serious issues light. We educate and entertain.

				    			</div>
				    			<div class="members">Private</div>
				    			<div class="members">200 Members</div>
				    			<div class="members">200 Posts</div>
				    	</div>
				    	<a class="float-right">Join</a> <div class="clear"></div>
				    </div>
				    <button class="button float-right">Explore More Communities</button>
				</div>
			  </div>
			  <div class="all-friends-list full-width no-padding">

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
					<a href="" class="float-right">Add Friend</a>
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
					<a href="" class="float-right">Add Friend</a>
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
					<a href="" class="float-right">Add Friend</a>
				</div>

				<button class="button float-right">Find More Friends</button>
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