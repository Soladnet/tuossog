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
			<div class="posts">
				<?php 
				include("post-box.php");
				include("home-timeline-filter.php");
				include("new-post.php");
				include("new-post.php");
				?>
			</div>
			
			<div class="aside">
				<div class="aside-wrapper">
					<img class="profile-pic" src="images/1.jpg">
					<table>
						<tr><td></td><td><h3>Ciroma Chukwuma Adekunle</h3></td></tr>
						<tr><td><span class="icon-16-map"></span></td><td class="profile-meta"> Abuja, Federal Capital Territory, Nigeria</td></tr>
						<tr><td><span class="icon-16-female"></span></td><td class="profile-meta"> Female</td></tr>
						<tr><td><span class="icon-16-male"></span></td><td class="profile-meta"> Male</td></tr>
						<tr><td><span class="icon-16-dot"></span></td><td class="profile-meta"><a id="show-full-profile" href="javascript:toggle('full-profile-data', 'show-full-profile');" > View Full Profile</a> </td></tr>
					</table>					
					<div class="clear"></div>

					<button class=" button"><span class="icon-16-eye"></span> Wink</button>
					<button class=" button"><span class="icon-16-mail"></span> Send Message</button><!-- 
					<button class=""><span class="icon-16-add-to-list"></span> Request Friendship</button>
					<button class=""><span class="icon-16-cross"></span> De-Friend</button> -->
					<button class=" button"><span class="icon-16-checkmark"></span> Accept Friendship</button>

					<div class="clear"></div>
					<div id="full-profile-data" class="no-display">
						<hr>
						<b>Personal Information</b>
						<table class="profile-meta " colspan="1">
							<tr><td>Name</td><td>Ciroma Chukwuma Adekunle <td></tr>
							<tr><td>Email</td><td>chukwuade2344555555@gmail.com<td></tr>
							<tr><td>Gender</td><td>Male<td></tr>
							<tr><td>Date of Birth</td><td>31 January <td></tr>
							<tr><td>Relationship</td><td>Single<td></tr>
							<tr><td>Phone</td><td>+234000000000<td></tr>
							<tr><td>Website</td><td>www.chukwuade.com<td></tr>
						</table>
						<hr>
						<p><b>Location</b></p>
						<!-- <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ng/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Abuja,+Abuja+Capital+Territory,+Nigeria&amp;aq=0&amp;oq=abuja,+niger&amp;sll=9.033872,8.677457&amp;sspn=11.762511,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=Abuja,+Abuja+Capital+Territory&amp;t=m&amp;ll=9.066839,7.482376&amp;spn=0.20342,0.136642&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.ng/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Abuja,+Abuja+Capital+Territory,+Nigeria&amp;aq=0&amp;oq=abuja,+niger&amp;sll=9.033872,8.677457&amp;sspn=11.762511,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=Abuja,+Abuja+Capital+Territory&amp;t=m&amp;ll=9.066839,7.482376&amp;spn=0.20342,0.136642&amp;z=11&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					-->
					<hr>
					<p><b>College</b></p>
				</div>
			</div>
			

			<div class="aside-wrapper">
				<h3>Communities</h3>
				<p>You're a member of <a href=""><span class="icon-16-contract"></span>5 Communities</a></p>
				<br>
				<hr>
				<script type="text/javascript">
				function openChat() {
					window.open("http://tlk.io/Gossout-30",null,"toolbar=no,menubar=no,resizable =yes,copyhistory=no,location=no,directories=no,height=500,width=300");
				};
				
				</script>
				<div class="community-listing"><span><a href="">Ahmadu Bello University, Zaria, Nigeria.</a></span>
						<!-- <div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div> -->
					</div>
					<hr>
					<div class="community-listing"><span><a href="">Eko Radio Party</a></span>
						<!-- <div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div> -->
					</div>
					<hr>
					<div class="community-listing"><span><a href="">Abuja, Federal Capital Territory, Nigeria</a></span>
						<!-- <div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div> -->
					</div>
					<hr>
					<p class="community-listing">
						<span>
							<span><span class="icon-16-dot"></span><a href="communities.php">Show all</a></span>
							<span><span class="icon-16-dot"></span><a href="">Suggested Communities</a></span>
						</span>
					</p>
				</div>
				<div class="aside-wrapper">
					<h3>Friends</h3>
					<p>You have <a href=""><span class="icon-16-user"></span>205 Friends</a></p>
					<hr>
					<img class= "friends-thumbnails" src="images/1.jpg">
					<img class= "friends-thumbnails" src="images/2.jpg">
					<img class= "friends-thumbnails" src="images/3.jpg">
					<img class= "friends-thumbnails" src="images/snip.jpg">
					<p class="community-listing">
						<span>
							<span><span class="icon-16-dot"></span><a href="all-friends.php">Show all</a></span>
							<span><span class="icon-16-dot"></span><a id="show-suggested-friends" href="javascript:toggle('suggested-friends', 'show-suggested-friends');" >Suggested Friends</a></span>
						</span>
					</p>
				</div>
				<?php
				include("suggested-friends.php");
				?>
				
			</div>	
			<div class="clear"></div>		
		</div>
		<?php
		include("footer.php");
		?>
	</div>

</body>
</html>