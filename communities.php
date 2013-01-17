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

			function toggle(ele, txt) {
				var element = document.getElementById(ele);
				var text = document.getElementById(txt);

				if(element.style.display == 'block') {
					element.style.display = 'none';

					if(text.id=="show-suggested-friends"){
						text.innerHTML = "Suggested Friends";
					}
					else if (text.id=="show-full-profile"){
					    text.innerHTML = "View Full Profile";
					}
					
				}
				else {
					element.style.display = "block";

					if(text.id=="show-suggested-friends"){
						text.innerHTML = "Hide Suggested Friends";
					}
						
					else if(text.id=="show-full-profile"){
						text.innerHTML = "Hide Full Profile";
					}
				}
			} 
			</script>
			<div class="communities-list">
				<div class="community-box">
					<div class="community-search-box">
						<input name="" class="community-search-field float-left" placeholder="Search Communities" type="text" value="" required="">
						<div class="float-left">
							<span ></span>
							<input type="submit" class="community-search-button" value="Search">
						</div>
					</div>
					
					<div class="clear"></div>
				</div>

				<div class="community-box">
					<div class="community-box">
						<div><a href="sample-community.php">Eko Radio Party</a> </div>
						<div class="details">ERP, a radio programme like no other... 
							  with sole objective of making serious issues light. We educate and entertain
						</div>
						<div class="members">200 Members</div>
						<div class="members">200 Posts</div>
						<div class="clear"></div>
						<!-- <span class="button communities-button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						<span class="button communities-button"><span class="icon-16-checkmark"></span> Join </span> -->
					</div>
					<div class="community-box">
						<div><a href="sample-community.php">Kiev National University of Construction And Architecture</a> </div>
						
						<div class="members">200 Members</div>
						<div class="members">200 Posts</div>
						<div class="clear"></div>
						<!-- <span class="button communities-button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						<span class="button communities-button"><span class="icon-16-checkmark"></span> Join </span> -->
					</div>
					

				</div>
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

					<p class="profile-meta-functions button"><span class="icon-16-eye"></span> Wink</p>
					<p class="profile-meta-functions button"><span class="icon-16-mail"></span> Send Message</p><!-- 
					<p class="profile-meta-functions"><span class="icon-16-add-to-list"></span> Request Friendship</p>
					<p class="profile-meta-functions"><span class="icon-16-cross"></span> De-Friend</p> -->
					<p class="profile-meta-functions button"><span class="icon-16-checkmark"></span> Accept Friendship</p>

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
				

				<hr>
				<div class="aside-wrapper">
					<h4>Communities</h4>
					<p>You're a member of <a href=""><span class="icon-16-contract"></span>5 Communities</a></p>
					<br>
					<hr>
					<script type="text/javascript">
					function openChat() {
						window.open("http://tlk.io/Gossout-30",null,"toolbar=no,menubar=no,resizable =yes,copyhistory=no,location=no,directories=no,height=500,width=300");
					};
					
					</script>
					<div class="community-listing"><span><a href="">Ahmadu Bello University, Zaria, Nigeria.</a></span>
						<div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div>
					</div>
					<hr>
					<div class="community-listing"><span><a href="">Eko Radio Party</a></span>
						<div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div>
					</div>
					<hr>
					<div class="community-listing"><span><a href="">Abuja, Federal Capital Territory, Nigeria</a></span>
						<div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div>
					</div>
					<hr>
					<p class="community-listing">
						<span>
							<span><span class="icon-16-dot"></span><a href="">Show all</a></span>
							<span><span class="icon-16-dot"></span><a href="">Suggested Communities</a></span>
						</span>
					</p>
				</div>
				<hr>
				<div class="aside-wrapper">
					<h4>Friends</h4>
					<p>You have <a href=""><span class="icon-16-user"></span>205 Friends</a></p>
					<hr>
					<img class= "friends-thumbnails" src="images/1.jpg">
					<img class= "friends-thumbnails" src="images/2.jpg">
					<img class= "friends-thumbnails" src="images/3.jpg">
					<img class= "friends-thumbnails" src="images/snip.jpg">
					<p class="community-listing">
						<span>
							<span><span class="icon-16-dot"></span><a href="">Show all</a></span>
							<span><span class="icon-16-dot"></span><a id="show-suggested-friends" href="javascript:toggle('suggested-friends', 'show-suggested-friends');" >Suggested Friends</a></span>
						</span>
					</p>
				</div>
				<hr>
				<div id= "suggested-friends" class="no-display suggested-friends aside-wrapper" > 
					<h4>Suggested Friends </h4>
					<hr>
					<img class= "friends-thumbnails float-left" src="images/snip.jpg"> 
					<div class="float-left">
						<a href=" " class="name">Al-Asaad Bin Muhammad Al-Menk Daud Suleiman</a>
						<p class="location">Abuja, Federal Capital Territory, Nigeria</p>
				    </div>
				    <div class="clear"></div>
				</div>
				
			</div>	
			<div class="clear"></div>		
		</div>
		<?php
		include("footer.php");
		?>
	</div>

</body>
</html>